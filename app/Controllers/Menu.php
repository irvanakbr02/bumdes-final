<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\MenuModel;

class Menu extends BaseController
{
    protected $db, $builder, $model;
    // public function __construct()
    // {
    //     $this->db      = \Config\Database::connect();
    //     $this->builder = $this->db->table('menu');
    //     $this->model = new MenuModel();
    // }
    protected $kategori;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('menu');
        $this->kategori = new KategoriModel();
        $this->menu = new MenuModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Menu Kategori',
            'menu' => $this->menu->getAll()
        ];

        // $users = new UserModel();
        // $data['users'] = $users->findAll();

        // $this->builder->select('menu.id as menuid, slug, nama, deskripsi, foto, kategori.kategori_nama as kategori');
        // $this->builder->join('kategori', 'kategori.kategori_id = menu.id');
        // $query = $this->builder->get();

        // // result object
        // $data['menu'] = $query->getResultArray();
        return view('admin/halaman/menu/index', $data);
    }
    public function create()
    {
        $data = [
            'kategori' => $this->kategori->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/halaman/menu/create', $data);
    }
    public function save()
    {
        // $data = $this->request->getPost();
        // $this->menu->save($data);
        // return redirect()->to('admin/menu/create')->with('success', 'Data Disimpan');
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => "Pilih gambar terlebih dahulu",
                    'max_size' => "Ukuran gambar terlalu besar",
                    'is_image' => "Yang anda pilih bukan gambar",
                    'mime_in' => "Yang anda pilih bukan gambar"
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/budaya/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/menu/create')->withInput();
        }

        //ambil gambar
        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {

            //ubah nama file jadi random ke database
            $namaFoto = $fileFoto->getRandomName();
            //pindah file ke folder img/  
            $fileFoto->move('img', $namaFoto);
        }

        //ambil nama file untuk ke database 
        $namaFoto = $fileFoto->getName();

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->menu->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil ditambah.');

        return redirect()->to('/admin/menu');
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail ',
        ];

        $this->builder->select('menu.id as menuid, slug, nama, deskripsi, foto, kategori.kategori_nama as kategori');
        $this->builder->join('kategori', 'kategori.kategori_id = menu.kategori');
        $this->builder->where('slug', $slug);
        $query = $this->builder->get();

        // result object
        $data['menu'] = $query->getRowArray();

        return view('/admin/halaman/menu/detail', $data);
    }
}
