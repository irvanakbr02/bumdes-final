<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $foreignKey = 'kategori';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama', 'slug', 'deskripsi', 'foto', 'kategori'];

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
        $builder = $this->db->table('menu');
        // $builder = $this->select(*);
        // $builder = $this->select('menu.id as menuid, slug, nama, deskripsi, foto, kategori.kategori_nama as kategori');
        $builder->join('kategori', 'kategori.kategori_id = menu.kategori');
        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getWisata($slug = false)
    {
        // $builder = $this->db->table('menu');
        $builder = $this->select('menu.id as menuid, slug, nama, deskripsi, foto, kategori.kategori_nama as kategori');
        $builder->join('kategori', 'kategori.kategori_id = menu.kategori');
        $builder->where('kategori', 1);
        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getKuliner($slug = false)
    {
        $builder = $this->db->table('menu');
        $builder->join('kategori', 'kategori.kategori_id = menu.kategori');
        $builder->where('kategori', 3);
        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getKenian($slug = false)
    {
        $builder = $this->db->table('menu');
        $builder->join('kategori', 'kategori.kategori_id = menu.kategori');
        $builder->where('kategori', 2);
        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getBudaya($slug = false)
    {
        $builder = $this->db->table('menu');
        $builder->join('kategori', 'kategori.kategori_id = menu.kategori');
        $builder->where('kategori', 4);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
