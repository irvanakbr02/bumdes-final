<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\PeriodeModel;

class Periode extends BaseController
{
    protected $db, $builder, $model;
    protected $periode;
    public function __construct()
    {
        $this->periode = new PeriodeModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Menu Kategori',
            'periode' => $this->periode->findAll()
        ];
        return view('admin/halaman/periode/index', $data);
    }
    public function create()
    {
        $data = [
            'periode' => $this->periode->findAll(),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/halaman/periode/create', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'periode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ]
        ])) {
            return redirect()->to('admin/profil/periode/create')->withInput();
        }
        $this->periode->save([
            'periode' => $this->request->getVar('periode'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil ditambah.');

        return redirect()->to('/admin/profil/periode');
    }
    public function delete($id)
    {
        $this->periode->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus.');
        return redirect()->to('/admin/profil/periode');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah data profil',
            'validation' => \Config\Services::validation(),
            'periode' => $this->periode->getId($id),
        ];
        return view('admin/halaman/periode/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'periode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('admin/profil/periode/edit/' . $this->request->getVar('periode_id'))->withInput();
        }
        // $this->periode->save([
        //     'id' => $id,
        //     'periode' => $this->request->getVar('periode'),
        // ]);
        $data = $this->request->getPost();
        $this->periode->update($id, $data);
        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('/admin/profil/periode');
    }
}
