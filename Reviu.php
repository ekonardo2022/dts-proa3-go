<?php

namespace App\Controllers;

class Reviu extends BaseController
{
    public function index()
    {
        $data['title'] = "Berita Acara Reviu";
        $data['activeMenu'] = "Reviu";
        echo view('admin_header', $data);
        echo view('reviu_view', $data);
        echo view('admin_footer');
        
    }
}
