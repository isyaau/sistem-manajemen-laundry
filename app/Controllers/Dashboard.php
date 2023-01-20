<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
    	$data = [
            'session' => $session,
    		'title' =>'Dashboard | SIA',
            'suplier' => $this->suplierModel->hitungJumlahSuplier(),
            'user' => $this->userModel->hitungJumlahUser(),
            'laundry' => $this->kiloanModel->hitungJumlahLaundry(),
            'akun' => $this->akunModel->hitungJumlahAkun()

    	];
       return view ('dashboard/index', $data);
    }

}