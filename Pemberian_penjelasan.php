<?php

namespace App\Controllers;

class Pemberian_penjelasan extends BaseController
{
    public function index()
    {
        $data['title'] = "Berita Acara Pemberian Penjelasan";
        $data['activeMenu'] = "Pemberian Penjelasan";
        echo view('admin_header', $data);
        echo view('pemberian_penjelasan_view', $data);
        echo view('admin_footer');
        
    }
}
