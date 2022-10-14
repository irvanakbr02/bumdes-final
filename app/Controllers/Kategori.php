<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\MenuModel;

class Kategori extends BaseController
{
    protected $db, $builder, $model;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('menu');
        $this->model = new MenuModel();
    }
    public function index()
    {
        $data['title'] = 'Menu Kategori';

        // $users = new UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('menu.id as menuid, slug, nama, deskripsi, foto, kategori.kategori_nama as kategori');
        $this->builder->join('kategori', 'kategori.kategori_id = menu.id');
        $query = $this->builder->get();

        // result object
        $data['menu'] = $query->getResultArray();
        return view('admin/halaman/menu/index', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Detail ',
        ];

        $this->builder->select('menu.id as menuid, slug, nama, deskripsi, foto, kategori.kategori_nama as kategori');
        $this->builder->join('kategori', 'kategori.kategori_id = menu.id');
        $this->builder->where('slug', $slug);
        $query = $this->builder->get();

        // result object
        $data['menu'] = $query->getRowArray();

        return view('/admin/halaman/menu/detail', $data);
    }
}
