<?php

namespace App\Controllers;

class Hasil_evaluasi extends BaseController
{
    public function index()
    {
        $data['title'] = "Berita Acara Hasil Evaluasi";
        $data['activeMenu'] = "Hasil Evaluasi";
        echo view('admin_header', $data);
        echo view('hasil_evaluasi_view', $data);
        echo view('admin_footer');
        
    }
}
