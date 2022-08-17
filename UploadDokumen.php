<?php

namespace App\Controllers;

class UploadDokumen extends BaseController
{
    public function index()
    {
        $data['title'] = "Upload Dokumen";
        $data['activeMenu'] = "Upload Dokumen";
        echo view('admin_header', $data);
        echo view('uploaddokumen_view', $data);
        echo view('admin_footer');
        
    }
}
