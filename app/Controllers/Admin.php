<?php

namespace App\Controllers;
use App\Models\PetaniModel;
use App\Models\PanenModel;

class Admin extends BaseController
{
    public function dashboard()
    {
        $petaniModel = new PetaniModel();
        $panenModel  = new PanenModel();

        $data = [
            'totalPetani' => $petaniModel->countAll(),
            'totalPanen'  => $panenModel->countAll(),
        ];
        
        return view('admin/dashboard', $data);
    }

    // CRUD PETANI
    public function petani()
    {
        $model = new PetaniModel();
        $data['petani'] = $model->findAll();
        return view('admin/petani/index', $data);
    }

    public function tambahPetani()
    {
        return view('admin/petani/create');
    }

    public function simpanPetani()
    {
        $model = new PetaniModel();
        $model->insert([
            'nama' => $this->request->getPost('nama'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'umur' => $this->request->getPost('umur'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
            'email' => $this->request->getPost('email'),
            'user_id' => session()->get('user_id'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->to('/admin/petani');
    }

    public function editPetani($id)
    {
        $model = new PetaniModel();
        $data['petani'] = $model->find($id);
        return view('admin/petani/edit', $data);
    }   

    public function updatePetani($id)
    {
        $model = new PetaniModel();
        $model->update($id, [
            'nama' => $this->request->getPost('nama'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'umur' => $this->request->getPost('umur'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
            'email' => $this->request->getPost('email'),
        ]);
        return redirect()->to('/admin/petani');
    }

    public function hapusPetani($id)
    {
        $model = new PetaniModel();
        $model->delete($id);
        return redirect()->to('/admin/petani');
    }

    // CRUD PANEN
    public function panen()
    {
        $model = new PanenModel();
        $data['panen'] = $model
            ->select('hasil_panen.*, petani.nama as nama_petani')
            ->join('petani', 'petani.id = hasil_panen.petani_id')
            ->findAll();

        return view('admin/panen/index', $data);
    }

    public function tambahPanen()
    {
        $petaniModel = new PetaniModel();
        $data['petani'] = $petaniModel->findAll();
        return view('admin/panen/create', $data);
    }

    public function simpanPanen()
    {
        $model = new PanenModel();
        $model->insert([
            'petani_id' => $this->request->getPost('petani_id'),
            'jenis_tanaman' => $this->request->getPost('jenis_tanaman'),
            'jumlah_kg' => $this->request->getPost('jumlah_kg'),
            'tanggal_panen' => $this->request->getPost('tanggal_panen'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->to('/admin/panen');
    }

    public function editPanen($id)
    {
        $model = new PanenModel();
        $petaniModel = new PetaniModel();
        $data['panen'] = $model->find($id);
        $data['petani'] = $petaniModel->findAll();
        return view('admin/panen/edit', $data);
    }

    public function updatePanen($id)
    {
        $model = new PanenModel();
        $model->update($id, [
            'petani_id' => $this->request->getPost('petani_id'),
            'jenis_tanaman' => $this->request->getPost('jenis_tanaman'),
            'jumlah_kg' => $this->request->getPost('jumlah_kg'),
            'tanggal_panen' => $this->request->getPost('tanggal_panen'),
        ]);
        return redirect()->to('/admin/panen');
    }

    public function hapusPanen($id)
    {
        $model = new PanenModel();
        $model->delete($id);
        return redirect()->to('/admin/panen');
    }
}
