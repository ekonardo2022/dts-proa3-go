<?php

namespace App\Controllers;

class Penetapan_pemenang extends BaseController
{
    public function index()
    {
        $data['title'] = "Berita Acara Penetapan Pemenang";
        $data['activeMenu'] = "Penetapan Pemenang";
        echo view('admin_header', $data);
        echo view('penetapan_pemenang_view', $data);
        echo view('admin_footer');
        
    }
}
