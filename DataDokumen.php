<?php

namespace App\Controllers;
use App\Models\Model_dokumen;
class DataDokumen extends BaseController
{
    public function __construct()
    {
       $this->Model_dokumen = new Model_dokumen();
    }

    public function index()
    {
    
    
        $data = array(
            'title' => 'Data Dokumen',
            'activeMenu' => 'Data Dokumen',
            'dokumen' => $this->Model_dokumen->tampildata()
        );
        echo view('admin_header', $data);
        echo view('datadokumen_view', $data);
        echo view('admin_footer');
        
    }
}
