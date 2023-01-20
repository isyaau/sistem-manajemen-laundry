<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunModel extends Model
{
    protected $table      = 'tb_akun';
    protected $primaryKey = 'id_akun';

    protected $allowedFields = ['nama_akun', 'no_akun'];

    protected $useTimestamps = false;

    public function getAkun($id_akun = false)
    {
        if ($id_akun == false){
            return $this->findAll();
        }
        return $this->where(['id_akun' => $id_akun])->first();
    }

    public function jurnalumum(){
        $jurnalumum = $this->query('SELECT tb_pemasukan.created_at, tb_pengeluaran.created_at, tb_akun.nama_akun, tb_pemasukan.total, tb_pengeluaran.total
        FROM tb_akun
        JOIN tb_pemasukan ON tb_akun.no_akun = tb_pemasukan.no_akun
        JOIN tb_pengeluaran ON tb_akun.no_akun = tb_pengeluaran.no_akun');

        return $jurnalumum->get();
        // $builder = $this->table('tb_akun');
        // $builder->select('*');
        // $builder->join('comments', 'comments.id = blogs.id');
        // $query = $builder->get();

    }
    public function hitungJumlahAkun()
    {
        $akun = $this->query('SELECT * FROM tb_akun');
        return $akun->getNumRows();
    }
    // ...
}