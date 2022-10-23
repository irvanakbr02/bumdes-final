<?php

namespace App\Controllers;

use App\Models\PeriodeModel;
use App\Models\VisiModel;

class Visi extends BaseController
{
    protected $db, $builder, $model;
    protected $periode;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('visimisi');
        $this->periode = new PeriodeModel();
        $this->visi = new VisiModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Visi Misi',
            'visi' => $this->visi->getAll()
        ];

        // $users = new UserModel();
        // $data['users'] = $users->findAll();

        // $this->builder->select('visi.id as menuid, slug, nama, deskripsi, foto, periode.kategori_nama as periode');
        // $this->builder->join('periode', 'periode.kategori_id = visi.id');
        // $query = $this->builder->get();

        // // result object
        // $data['visi'] = $query->getResultArray();
        return view('admin/halaman/visi/index', $data);
    }
    public function visi2017()
    {
        $data = [
            'title' => 'Visi Misi Bumdesa',
            'periode' => $this->periode->findAll(),
            'visi' => $this->visi->getPeriode2017()
        ];
        return view('user/visi/index', $data);
    }
    public function create()
    {
        $data = [
            'periode' => $this->periode->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/halaman/visi/create', $data);
    }
    public function save()
    {
        // $data = $this->request->getPost();
        // $this->visi->save($data);
        // return redirect()->to('admin/visi/create')->with('success', 'Data Disimpan');
        if (!$this->validate([
            'visi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/visi/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/profil/visi/create')->withInput();
        }

        $this->visi->save([
            'periode' => $this->request->getVar('periode'),
            'visi' => $this->request->getVar('visi'),
        ]);
        // $data = $this->request->getPost();
        // $this->visi->save($data);
        session()->setFlashdata('pesan', 'Data Berhasil ditambah.');

        return redirect()->to('/admin/profil/visi');
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail ',
        ];

        $this->builder->select('visi.id as menuid, slug, nama, deskripsi, foto, periode.kategori_nama as periode');
        $this->builder->join('periode', 'periode.kategori_id = visi.periode');
        $this->builder->where('slug', $slug);
        $query = $this->builder->get();

        // result object
        $data['visi'] = $query->getRowArray();

        return view('/admin/halaman/visi/detail', $data);
    }
    public function delete($id)
    {
        $this->visi->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus.');
        return redirect()->to('/admin/profil/visi');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah data menu',
            'periode' => $this->periode->findAll(),
            'validation' => \Config\Services::validation(),
            'visi' => $this->visi->getId($id),
        ];
        return view('admin/halaman/visi/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'visi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'periode' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/visi/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('admin/profil/visi/edit/' . $this->request->getVar('id'))->withInput();
        }
        // $slug = url_title($this->request->getVar('nama'), '-', true);
        // $this->visi->save([
        //     'id' => $id,
        //     'nama' => $this->request->getVar('nama'),
        //     'slug' => $slug,
        //     'deskripsi' => $this->request->getVar('deskripsi'),
        //     'periode' => $this->request->getVar('periode'),
        //     'foto' => $namaFoto
        // ]);
        $data = $this->request->getPost();
        $this->visi->update($id, $data);
        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('/admin/profil/visi');
    }
}
