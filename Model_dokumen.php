<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_dokumen extends Model
{
    public function tampildata()
    {
        return $this->db->table('tbl_arsip')->get()->getResultArray();
    }
}
