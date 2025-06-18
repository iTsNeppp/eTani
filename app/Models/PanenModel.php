<?php

namespace App\Models;
use CodeIgniter\Model;

class PanenModel extends Model
{
    protected $table = 'hasil_panen';
    protected $primaryKey = 'id';
    protected $allowedFields = ['petani_id', 'jenis_tanaman', 'jumlah_kg', 'tanggal_panen', 'created_at'];
    protected $useTimestamps = false;
}
