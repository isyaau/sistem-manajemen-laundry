<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table      = 'tb_pengeluaran';

    protected $primaryKey = 'id_pengeluaran';

    protected $allowedFields = ['id_pengeluaran', 'no_akun', 'jenis', 'satuan', 'jumlah', 'keterangan', 'total', 'created_at', 'updated_at'];

    protected $useTimestamps = true;

    public function getPengeluaran($id_pengeluaran = false)
    {
        if ($id_pengeluaran == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_pengeluaran');
            $query   = $builder->get();
            return $query;
        }
        return $this->where(['id_pengeluaran' => $id_pengeluaran])->first();
    }
    public function getAkun()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_akun');
        $query   = $builder->get();
        return $query;
    }

    public function joinAkun($id_pengeluaran = false)
    {
        if ($id_pengeluaran == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('tb_pengeluaran');
            $builder->select('*');
            $builder->join('tb_akun', 'tb_akun.no_akun = tb_pengeluaran.no_akun');
            $query = $builder->get();
            return $query;
        }
        return $this->where(['id_pengeluaran' => $id_pengeluaran])->first();


        // return $this->table('tb_pengeluaran')->select('*')->join('tb_laundry', 'tb_laundry.id_laundry = tb_pengeluaran.id_laundry');
    }

    // ...
}