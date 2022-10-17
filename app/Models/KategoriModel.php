<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'kategori_id';
    // protected $useTimestamps = true;
    protected $allowedFields = ['kategori_id',  'kategori_nama'];

    public function getId($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['kategori_id' => $id])->first();
    }
}
