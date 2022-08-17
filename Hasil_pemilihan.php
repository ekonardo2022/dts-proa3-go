<?php

namespace App\Controllers;

class Hasil_pemilihan extends BaseController
{
    public function index()
    {
        $data['title'] = "Berita Acara Hasil Pemilihan";
        $data['activeMenu'] = "Hasil Pemilihan";
        echo view('admin_header', $data);
        echo view('hasil_pemilihan_view', $data);
        echo view('admin_footer');
        
    }
}
