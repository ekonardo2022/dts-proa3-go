<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $data['activeMenu'] = "Dashboard";
        echo view('admin_header', $data);
        echo view('dashboard_view', $data);
        echo view('admin_footer');
        
    }
}
