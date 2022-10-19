<?php

namespace App\Models;

use CodeIgniter\Model;

class PeriodeModel extends Model
{
    protected $table = 'periode';
    protected $primaryKey = 'periode_id';
    // protected $useTimestamps = true;
    protected $allowedFields = ['periode_id',  'periode'];

    public function getId($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['periode_id' => $id])->first();
    }
}
