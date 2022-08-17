<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_auth extends Model
{
    public function login($nip,$password)
    {
        return $this->db->table('tbl_user')->where([
            'nip' => $nip,
            'password' => $password,
        ])->get()->getRowArray();
    }
}
