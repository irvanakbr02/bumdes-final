<?php

namespace App\Controllers;

use App\Models\PeriodeModel;
use App\Models\VisiModel;

class Profil extends BaseController
{
    protected $db, $builder, $model;
    // public function __construct()
    // {
    //     $this->db      = \Config\Database::connect();
    //     $this->builder = $this->db->table('visi');
    //     $this->model = new MenuModel();
    // }
    protected $kategori;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('visi');
        $this->periode = new PeriodeModel();
        $this->visi = new VisiModel();
    }
    public function periode()
    {
        $data = [
            'title' => 'Admin Periode',
            'periode' => $this->periode->findAll()
        ];
        return view('admin/halaman/profil/periode', $data);
    }
    public function visi()
    {
        $data = [
            'title' => 'Profil Bumdesa',
            'visi' => $this->visi->getAll()
        ];
        return view('admin/halaman/profil/visi', $data);
    }
}
