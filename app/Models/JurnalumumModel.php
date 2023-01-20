<?php

namespace App\Models;

use CodeIgniter\Model;

class JurnalumumModel extends Model
{
    protected $table      = 'tb_akun';
    protected $primaryKey = 'id_akun';

    protected $allowedFields = ['no_trx', 'id_trx', 'id_pemasukan', 'no_akun', 'cretaed_at', 'updated_at', 'keterangan', 'total'];

    protected $useTimestamps = true;

    public function getJurnalumum($id_pemasukan = false)
    {
        if ($id_pemasukan == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_ju');
            $query   = $builder->get();
            return $query;
        }
        return $this->where(['id_trx' => $id_pemasukan])->first();
    }
    public function joinJurnalumum($id_trx = false)
    {
        if ($id_trx == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_ju');
            $builder->select('*');
            $builder->join('tb_akun', 'tb_akun.no_akun = tb_ju.no_akun');
            $builder->orderBy('id_ju', 'ASC');
            $query = $builder->get();
            return $query;
        }
        return $this->where(['id_trx' => $id_trx])->first();
    }

    public function filterbytanggal($bulan,$tahun)
    {
    $db      = \Config\Database::connect();
    $builder = $db->table('tb_ju');
    $builder->select('*');
    $builder->join('tb_akun', 'tb_akun.no_akun = tb_ju.no_akun');
    $builder->orderBy('id_ju', 'ASC');
    $builder->where('month(tb_ju.created_at)', $bulan); 
    $builder->where('year(tb_ju.created_at)', $tahun); 
    $query = $builder->get();
    return $query;  
    }

    public function getAkun()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_akun');
        $query   = $builder->get();
        return $query;
    }

    
    
}