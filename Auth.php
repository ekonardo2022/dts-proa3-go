<?php

namespace App\Controllers;

use App\Models\Model_auth;
// use App\Models\ModelUsers;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_auth= new Model_auth();
    }   
    public function index()
    {
        $data = array (
            'title' => 'Login',
        );
        return view('login_view');

    }
    public function login()
    {
        if ($this->validate([
            'nip' => [
                'label'  => 'Nip',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi !!!'
                ]
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi !!!'
                ]
            ]
            
        ])) {
            // Jika Valid
            $nip = $this->request->getPost('nip');
            $password = $this->request->getPost('password');
            $cek = $this->Model_auth->login($nip, $password);
            if ($cek) {
                //jika data cocok
                session()->set('log',true);
                session()->set('name_user', $cek['nama_user']);
                session()->set('nip', $cek['nip']);
                session()->set('level', $cek['level']);
                return redirect()->to(base_url('Dashboard'));
            }else {
                session()->setFlashdata('pesan', 'Login Gagal !!!');
                return redirect()->to(base_url('auth/login'));  
            }

        }else {
            
            // jika tidak valid
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/index'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('nip');
        session()->remove('level');

        session()->setFlashdata('pesan', 'Anda telah logout !!!');
        return redirect()->to(base_url('auth'));
    }
}