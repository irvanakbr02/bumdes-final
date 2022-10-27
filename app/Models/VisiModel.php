<?php

namespace App\Models;

use CodeIgniter\Model;

class VisiModel extends Model
{
    protected $table = 'visimisi';
    protected $primaryKey = 'id';
    protected $foreignKey = 'periode';
    protected $allowedFields = ['id', 'visi', 'periode', 'status'];

    public function getId($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
    public function getBySlug($id = false)
    {
        return $this->where(['id' => $id])->first();
    }

    public function getAll($id = false)
    {
        $builder = $this->db->table('visimisi');
        // $builder = $this->select(*);
        // $builder = $this->select('visimisi.id as menuid, slug, nama, deskripsi, foto, kategori.kategori_nama as kategori');
        $builder->join('periode', 'periode.periode_id = visimisi.periode');
        $builder->join('status', 'status.status_id = visimisi.status');
        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getPeriode2017($slug = false)
    {
        $builder = $this->db->table('visimisi');
        $builder->join('periode', 'periode.periode_id = visimisi.periode');
        $builder->where('visimisi.periode', 1);
        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getAktif($slug = false)
    {
        $builder = $this->db->table('visimisi');
        $builder->join('periode', 'periode.periode_id = visimisi.periode');
        $builder->join('status', 'status.status_id = visimisi.status');
        $builder->where('visimisi.status', 1);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
