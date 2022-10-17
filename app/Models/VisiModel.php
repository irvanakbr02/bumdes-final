<?php

namespace App\Models;

use CodeIgniter\Model;

class VisiModel extends Model
{
    protected $table = 'visimisi';
    protected $primaryKey = 'id';
    protected $foreignKey = 'periode';
    protected $allowedFields = ['id', 'periode'];

    public function getslug($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
    public function getBySlug($slug = false)
    {
        return $this->where(['slug' => $slug])->first();
    }

    public function getAll($slug = false)
    {
        $builder = $this->db->table('visimisi');
        // $builder = $this->select(*);
        // $builder = $this->select('visimisi.id as menuid, slug, nama, deskripsi, foto, kategori.kategori_nama as kategori');
        $builder->join('periode', 'periode.periode_id = visimisi.periode');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
