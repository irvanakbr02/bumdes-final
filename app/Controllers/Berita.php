<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class Berita extends BaseController
{
    protected $berita;
    public function __construct()
    {
        $this->berita = new BeritaModel();
    }
    public function berita()
    {
        $data = [
            'title' => 'Berita | Website Bumdesa',
            // 'berita' => $this->berita->getBerita()
            'berita' => $this->berita->paginate(3, 'berita'),
            'pager' => $this->berita->pager
        ];


        return view('/user/berita/berita', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Berita | Website Bumdesa',
            'berita' => $this->berita->getBerita($slug)
        ];

        return view('/user/berita/detail', $data);
    }
}
