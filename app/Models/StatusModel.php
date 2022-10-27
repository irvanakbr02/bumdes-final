<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table = 'status';
    protected $primaryKey = 'status_id';
    // protected $useTimestamps = true;
    protected $allowedFields = ['status_id',  'status'];

    public function getId($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['status_id' => $id])->first();
    }
}
