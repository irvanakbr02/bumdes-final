<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\KategoriModel;
use App\Models\MenuModel;
use App\Models\PeriodeModel;

class Anggota extends BaseController
{
    protected $db, $builder, $model;
    protected $periode;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('anggota');
        $this->periode = new PeriodeModel();
        $this->anggota = new AnggotaModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Menu Kategori',
            'anggota' => $this->anggota->getAll()
        ];

        // $users = new UserModel();
        // $data['users'] = $users->findAll();

        // $this->builder->select('anggota.id as menuid, slug, nama, deskripsi, foto, periode.kategori_nama as periode');
        // $this->builder->join('periode', 'periode.kategori_id = anggota.id');
        // $query = $this->builder->get();

        // // result object
        // $data['anggota'] = $query->getResultArray();
        return view('admin/halaman/anggota/index', $data);
    }
    public function anggota2017()
    {
        $data = [
            'title' => 'Anggota Bumdesa',
            'periode' => $this->periode->findAll(),
            'anggota' => $this->anggota->getAll()
        ];
        return view('user/anggota/biodata', $data);
    }
    public function struktur()
    {
        $data = [
            'title' => 'Struktur Keanggotaan Bumdesa',
            'periode' => $this->periode->findAll(),
            'anggota' => $this->anggota->getAll()
        ];
        return view('user/anggota/struktur', $data);
    }
    public function unitusaha()
    {
        $data = [
            'title' => 'Unit Usaha Bumdesa',
            'periode' => $this->periode->findAll(),
            'anggota' => $this->anggota->getAll()
        ];
        return view('halaman/unitusaha', $data);
    }
    public function regulasi()
    {
        $data = [
            'title' => 'Regulasi Bumdesa',
            'periode' => $this->periode->findAll(),
            'anggota' => $this->anggota->getAll()
        ];
        return view('halaman/regulasi', $data);
    }
    public function periode()
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

        return view('admin/halaman/anggota/create', $data);
    }
    public function save()
    {
        // $data = $this->request->getPost();
        // $this->anggota->save($data);
        // return redirect()->to('admin/anggota/create')->with('success', 'Data Disimpan');
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'alamat' => [
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
            // return redirect()->to('admin/anggota/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/profil/anggota/create')->withInput();
        }

        //ambil gambar
        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {

            //ubah nama file jadi random ke database
            $namaFoto = $fileFoto->getRandomName();
            //pindah file ke folder img/  
            $fileFoto->move('img/pengurus/', $namaFoto);
        }

        //ambil nama file untuk ke database 
        $namaFoto = $fileFoto->getName();

        $this->anggota->save([
            'nama' => $this->request->getVar('nama'),
            'periode' => $this->request->getVar('periode'),
            'jabatan' => $this->request->getVar('jabatan'),
            'alamat' => $this->request->getVar('alamat'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil ditambah.');

        return redirect()->to('/admin/profil/anggota');
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail ',
        ];

        $this->builder->select(' id, nama, alamat, foto, periode.periode as periode');
        $this->builder->join('periode', 'periode.periode_id = anggota.periode');
        $this->builder->where('id', $id);
        $query = $this->builder->get();

        // result object
        $data['anggota'] = $query->getRowArray();

        return view('/admin/halaman/anggota/detail', $data);
    }
    public function delete($id)
    {
        $anggota = $this->anggota->find($id);
        unlink('img/pengurus/' . $anggota['foto']);
        $this->anggota->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus.');
        return redirect()->to('/admin/profil/anggota');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah data anggota',
            'validation' => \Config\Services::validation(),
            'periode' => $this->periode->findAll(),
            'anggota' => $this->anggota->getId($id)
        ];
        return view('admin/halaman/anggota/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => "Pilih gambar terlebih dahulu",
                    'max_size' => "Ukuran gambar terlalu besar",
                    'is_image' => "Yang anda pilih bukan gambar",
                    'mime_in' => "Yang anda pilih bukan gambar"
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/anggota/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('admin/profil/anggota/edit/' . $this->request->getVar('id'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        //cek gambar apakah tetap gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {

            //generate file nama random
            $namaFoto = $fileFoto->getRandomName();

            //pindah file ke folder img/
            $fileFoto->move('img/pengurus/', $namaFoto);

            //ambil nama file untuk ke database 
            $namaFoto = $fileFoto->getName();

            unlink('img/pengurus/' . $this->request->getVar('fotoLama'));
        }
        $this->anggota->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'jabatan' => $this->request->getVar('jabatan'),
            'periode' => $this->request->getVar('periode'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('/admin/profil/anggota');
    }
}
