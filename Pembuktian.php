<?php

namespace App\Controllers;

class Pembuktian extends BaseController
{
    public function index()
    {
        $data['title'] = "Berita Acara Pembuktian";
        $data['activeMenu'] = "Pembuktian";
        echo view('admin_header', $data);
        echo view('pembuktian_view', $data);
        echo view('admin_footer');
        
    }
}
