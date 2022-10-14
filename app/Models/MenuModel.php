<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
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
}
