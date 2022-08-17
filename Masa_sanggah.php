<?php

namespace App\Controllers;

class Masa_sanggah extends BaseController
{
    public function index()
    {
        $data['title'] = "Berita Acara Masa Sanggah";
        $data['activeMenu'] = "Masa Sanggah";
        echo view('admin_header', $data);
        echo view('masa_sanggah_view', $data);
        echo view('admin_footer');
        
    }
}
