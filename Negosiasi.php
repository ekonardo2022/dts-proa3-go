<?php

namespace App\Controllers;

class Negosiasi extends BaseController
{
    public function index()
    {
        $data['title'] = "Berita Acara Negosiasi";
        $data['activeMenu'] = "Negosiasi";
        echo view('admin_header', $data);
        echo view('negosiasi_view', $data);
        echo view('admin_footer');
        
    }
}
