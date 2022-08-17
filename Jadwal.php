<?php

namespace App\Controllers;

class Jadwal extends BaseController
{
    public function index()
    {
        $data['title'] = "Pengumuman Jadwal Pelaksanaan";
        $data['activeMenu'] = "Jadwal Pelaksanaan";
        echo view('admin_header', $data);
        echo view('jadwal_view', $data);
        echo view('admin_footer');
        
    }
}
