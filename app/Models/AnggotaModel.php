<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id';
    protected $foreignKey = 'periode';
    protected $allowedFields = ['id', 'nama', 'alamat', 'jabatan', 'foto', 'periode', 'status'];

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
        $builder->join('status', 'status.status_id = anggota.status');
        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getPeriode2017($slug = false)
    {
        $builder = $this->db->table('anggota');
        $builder->join('periode', 'periode.periode_id = anggota.periode');
        $builder->join('status', 'status.status_id = anggota.status');
        $builder->where('anggota.status', 1);
        // $builder->where('anggota.periode', 8);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
