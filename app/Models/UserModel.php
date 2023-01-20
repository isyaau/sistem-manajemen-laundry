<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'tb_user';
    protected $primaryKey = 'id_user';

    protected $allowedFields = ['nama_user', 'alamat_user', 'username', 'no_hp', 'password', 'rule'];

    protected $useTimestamps = true;
   

    public function getUser($id_user = false)
    {
        if ($id_user == false){
            return $this->findAll();
        }
        return $this->where(['id_user' => $id_user])->first();
    }

    public function hitungJumlahUser()
    {
        $user = $this->query('SELECT * FROM tb_user');
        return $user->getNumRows();
    }
    // ...
}