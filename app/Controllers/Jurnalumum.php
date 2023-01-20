<?php

namespace App\Controllers;

class Jurnalumum extends BaseController
{
    public function index()
    {
      $jurnalumum = $this->jurnalumumModel;
      $bulan = $this->request->getVar('bulan');
      $tahun = $this->request->getVar('tahun');
       if ($bulan && $tahun) {
         $bulan = $this->jurnalumumModel->filterbytanggal($bulan,$tahun);
       } else {
         $bulan = $this->jurnalumumModel->joinJurnalumum();
       }
      $data = [
    		'title' =>'Jurnal Umum | SIA',
         'jurnalumum' => $jurnalumum->getJurnalumum(),
         'joinjurnalumum' => $bulan,
         'akun' => $jurnalumum->getAkun(),
    	];
       return view ('jurnalumum/index', $data);
    }

    public function cetak()
    {
      $jurnalumum = $this->jurnalumumModel;
      $bulan = $this->request->getVar('bulan');
      $tahun = $this->request->getVar('tahun');
       if ($bulan && $tahun) {
         $bulan = $this->jurnalumumModel->filterbytanggal($bulan,$tahun);
       } else {
         $bulan = $this->jurnalumumModel->joinJurnalumum();
       }
      $data = [
    		'title' =>'Cetak Jurnal Umum | SIA',
          'jurnalumum' => $jurnalumum->getJurnalumum(),
          'joinjurnalumum' => $bulan,
          'akun' => $jurnalumum->getAkun(),
    	];
       return view ('jurnalumum/cetak', $data);
    }
}