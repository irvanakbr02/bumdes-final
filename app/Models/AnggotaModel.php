<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id';
    protected $foreignKey = 'periode';
    protected $allowedFields = ['id', 'nama', 'alamat', 'foto', 'periode'];

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
        $builder = $this->db->table('anggota');
        // $builder = $this->select(*);
        // $builder = $this->select('anggota.id as menuid, slug, nama, deskripsi, foto, kategori.kategori_nama as kategori');
        $builder->join('periode', 'periode.periode_id = anggota.periode');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
