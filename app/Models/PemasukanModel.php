<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasukanModel extends Model
{
    protected $table      = 'tb_pemasukan';

    protected $primaryKey = 'id_pemasukan';

    protected $allowedFields = ['id_pemasukan', 'id_laundry', 'no_akun', 'nama_pelanggan', 'alamat', 'no_hp', 'jumlah', 'total', 'keterangan', 'diskon', 'transaksi', 'dp_trx'];

    protected $useTimestamps = true;

    public function getPemasukan($id_pemasukan = false)
    {
        if ($id_pemasukan == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_pemasukan');
            $query   = $builder->get();
            return $query;
        }
        return $this->where(['id_pemasukan' => $id_pemasukan])->first();
    }
    public function getLaundry()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_laundry');
        $query   = $builder->get();
        return $query;
    }

    public function joinLaundry($id_pemasukan = false)
    {
        if ($id_pemasukan == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_pemasukan');
            $builder->select('*');
            $builder->join('tb_laundry', 'tb_laundry.id_laundry = tb_pemasukan.id_laundry');
            $query = $builder->get();
            return $query;
        }
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_pemasukan');
            $builder->select('*');
            $builder->join('tb_laundry', 'tb_laundry.id_laundry = tb_pemasukan.id_laundry');
            $builder->where('id_pemasukan', $id_pemasukan);
            $query2 = $builder->get();
            return $query2;

    }

    public function getAkun()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_akun');
        $query   = $builder->get();
        return $query;
    }

    public function joinAkun($id_pemasukan = false)
    {
        if ($id_pemasukan == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_pemasukan');
            $builder->select('*');
            $builder->join('tb_akun', 'tb_akun.no_akun = tb_pemasukan.no_akun');
            $query = $builder->get();
            return $query;
        }
        return $this->where(['id_pemasukan' => $id_pemasukan])->first();
    }

    public function hitungJumlahPemasukan()
    {
        $pemasukan = $this->query('SELECT * FROM tb_pemasukan');
        return $pemasukan->getNumRows();
    }

    public function getTotal($id_laundry = false)
    {
        if ($id_laundry == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_laundry');
            $query   = $builder->get();
            return $query;
        }
        return $this->where(['id_laundry' => $id_laundry])->first();
    }
    
        
}