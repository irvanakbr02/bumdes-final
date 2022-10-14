<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'kategori_id';
    // protected $useTimestamps = true;
    protected $allowedFields = ['kategori_id',  'kategori_nama'];

    public function getPesan($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
