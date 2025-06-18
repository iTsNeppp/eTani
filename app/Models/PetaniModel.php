<?php

namespace App\Models;
use CodeIgniter\Model;

class PetaniModel extends Model
{
    protected $table = 'petani';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'tanggal_lahir', 'umur', 'alamat', 'no_hp', 'email', 'user_id', 'created_at'];
    protected $useTimestamps = false;
}
