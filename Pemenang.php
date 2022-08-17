<?php

namespace App\Controllers;

class Pemenang extends BaseController
{
    public function index()
    {
        $data['title'] = "Pengumuman Pemenang";
        $data['activeMenu'] = "Pemenang";
        echo view('admin_header', $data);
        echo view('pemenang_view', $data);
        echo view('admin_footer');
        
    }
}
