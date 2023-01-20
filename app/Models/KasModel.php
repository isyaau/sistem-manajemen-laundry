<?php

namespace App\Models;

use CodeIgniter\Model;

class KasModel extends Model
{
    protected $table      = 'tb_kas';
    protected $primaryKey = 'id_kas';

    protected $allowedFields = ['no_akun','akun', 'keterangan', 'total'];

    protected $useTimestamps = true;
    

    public function getKas($id_kas = false)
    {
        if ($id_kas == false){
            return $this->findAll();
        }
        return $this->where(['id_kas' => $id_kas])->first();
    }

    public function joinAkun($id_kas = false)
    {
        if ($id_kas == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_kas');
            $builder->select('*');
            $builder->join('tb_akun', 'tb_akun.no_akun = tb_kas.no_akun');
            $query = $builder->get();
            return $query;
        }
        return $this->where(['id_kas' => $id_kas])->first();
    } 

    public function getAkun()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_akun');
        $query   = $builder->get();
        return $query;
    }

    // ...
}