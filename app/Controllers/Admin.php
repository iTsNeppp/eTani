<?php

namespace App\Controllers;
use App\Models\PetaniModel;
use App\Models\PanenModel;
use App\Models\LogModel;

class Admin extends BaseController
{
    public function dashboard()
    {
        $petaniModel = new PetaniModel();
        $panenModel  = new PanenModel();
        $logModel    = new LogModel();

        $data = [
            'totalPetani' => $petaniModel->countAll(),
            'totalPanen'  => $panenModel->countAll(),
            'lastLog'     => $logModel->orderBy('created_at', 'DESC')->first()['aktivitas'] ?? 'Belum ada log',
        ];

        return view('admin/dashboard', $data);
    }
}
