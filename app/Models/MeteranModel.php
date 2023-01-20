<?php

namespace App\Models;

use CodeIgniter\Model;

class MeteranModel extends Model
{
    protected $table      = 'tb_laundry';
    protected $primaryKey = 'id_laundry';

    protected $allowedFields = ['jenis_laundry', 'harga', 'tipe'];

    protected $useTimestamps = false;


    public function getMeteran($id_laundry = false)
    {
        if ($id_laundry == false){
            return $this->findAll();
        }
        return $this->where(['id_laundry' => $id_laundry])->first();
    }
    public  function get_where()
    {
        return $this->table('tb_laundry')->where('tipe', 'Meteran');
    }
    // ...
}