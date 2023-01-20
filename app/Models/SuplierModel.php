<?php

namespace App\Models;

use CodeIgniter\Model;

class SuplierModel extends Model
{
    protected $table      = 'tb_suplier';
    protected $primaryKey = 'id_suplier';

    protected $allowedFields = ['nama_suplier', 'alamat_suplier', 'email', 'no_hp'];

    protected $useTimestamps = false;
    

    public function getSuplier($id_suplier = false)
    {
        if ($id_suplier == false){
            return $this->findAll();
        }
        return $this->where(['id_suplier' => $id_suplier])->first();
    }

    public function hitungJumlahSuplier()
    {
        $suplier = $this->query('SELECT * FROM tb_suplier');
        return $suplier->getNumRows();
    }
    // ...
}