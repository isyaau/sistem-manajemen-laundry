<?php

namespace App\Models;

use CodeIgniter\Model;

class KiloanModel extends Model
{
    protected $table      = 'tb_laundry';
    protected $primaryKey = 'id_laundry';

    protected $allowedFields = ['jenis_laundry', 'harga', 'tipe'];

    protected $useTimestamps = false;


    public function getKiloan($id_laundry = false)
    {
        if ($id_laundry == false){
            return $this->findAll();
        }
        return $this->where(['id_laundry' => $id_laundry])->first();
    }
    public  function get_where()
    {
        return $this->table('tb_laundry')->where('tipe', 'Kiloan');
    }

    public  function get_harga()
    {
        $sql = "SELECT * FROM tb_laundry WHERE jenis_laundry = ?";
        return $this->query($sql, ['Setrika']);
        // return $this->table('tb_laundry')->where('jenis_laundry', 'Setrika');
    }

    public function hitungJumlahLaundry()
    {
        $laundry = $this->query('SELECT * FROM tb_laundry');
        return $laundry->getNumRows();
    }
    // ...
}