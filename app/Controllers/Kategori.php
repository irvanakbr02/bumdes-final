<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\MenuModel;

class Kategori extends BaseController
{
    protected $db, $builder, $model;
    protected $kategori;
    public function __construct()
    {
        $this->kategori = new KategoriModel();
        $this->menu = new MenuModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Menu Kategori',
            'kategori' => $this->kategori->findAll()
        ];
        return view('admin/halaman/kategori/index', $data);
    }
    public function create()
    {
        $data = [
            'kategori' => $this->kategori->findAll(),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/halaman/kategori/create', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'kategori_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ]
        ])) {
            return redirect()->to('admin/menu/kategori/create')->withInput();
        }
        $this->kategori->save([
            'kategori_nama' => $this->request->getVar('kategori_nama'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil ditambah.');

        return redirect()->to('/admin/menu/kategori');
    }
    public function delete($id)
    {
        $this->kategori->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus.');
        return redirect()->to('/admin/menu/kategori');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah data menu',
            'validation' => \Config\Services::validation(),
            'kategori' => $this->kategori->getId($id),
        ];
        return view('admin/halaman/kategori/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'kategori_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('admin/menu/kategori/edit/' . $this->request->getVar('kategori_id'))->withInput();
        }
        // $this->kategori->save([
        //     'id' => $id,
        //     'kategori_nama' => $this->request->getVar('kategori_nama'),
        // ]);
        $data = $this->request->getPost();
        $this->periode->update($id, $data);
        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('/admin/menu/kategori');
    }
}
