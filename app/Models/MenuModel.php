<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $foreignKey = 'kategori';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'deskripsi', 'foto', 'kategori'];

    public function getPariwisata($slug = false)
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

    public function getAll()
    {
        $builder = $this->db->table('menu');
        // $builder = $this->select(*);
        // $builder = $this->select('menu.id as menuid, slug, nama, deskripsi, foto, kategori.kategori_nama as kategori');
        $builder->join('kategori', 'kategori.kategori_id = menu.kategori');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
