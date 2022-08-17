<?php

namespace App\Controllers;

class Pembukaan_penawaran extends BaseController
{
    public function index()
    {
        $data['title'] = "Berita Acara Pembukaan Penawaran";
        $data['activeMenu'] = "Pembukaan Penawaran";
        echo view('admin_header', $data);
        echo view('pembukaan_penawaran_view', $data);
        echo view('admin_footer');
        
    }
}
