<?php

namespace App\Controllers;

use App\Models\PesanModel;

class Pesan extends BaseController
{
    protected $model;
    public function __construct()
    {

        $this->model = new PesanModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Admin Artikel Bumdesa | Website Bumdes',
            'pesan' => $this->model->getPesan()
            // 'model' => $this->model->paginate(5, 'model'),
            // 'pager' => $this->model->pager
        ];
        return view('halaman/pesan', $data);
    }
    public function pesan()
    {
        return view('user/kontak/kontak');
    }
    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'pesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ]

        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/pariwisata/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/pariwisata/create')->withInput();
        }

        $this->model->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'pesan' => $this->request->getVar('pesan'),
        ]);
        session()->setFlashdata('pesan', 'Pesan Berhasil Terkirim.');

        return redirect()->to('/kontak');
    }
    public function delete($id)
    {
        $this->model->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus.');
        return redirect()->to('/admin/kontak');
    }
}
