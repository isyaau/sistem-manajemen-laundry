<?php

namespace App\Controllers;

class Neraca extends BaseController
{
  public function index()
  {
    $neraca = $this->neracaModel;
    $bulan = $this->request->getVar('bulan');
    $tahun = $this->request->getVar('tahun');
     if ($bulan && $tahun) {
      $kaskreditbybulan = $this->neracaModel->sumKaskreditbybulan($bulan,$tahun);
      $kasdebitbybulan = $this->neracaModel->sumKasdebitbybulan($bulan,$tahun);
      $kaspemasukankreditbybulan = $this->neracaModel->sumpemasukankreditbybulan($bulan,$tahun);
      $kaspemasukandebitbybulan = $this->neracaModel->sumpemasukandebitbybulan($bulan,$tahun);
      $kasperalatankreditbybulan = $this->neracaModel->sumperalatankreditbybulan($bulan,$tahun);
      $kasperalatandebitbybulan = $this->neracaModel->sumperalatandebitbybulan($bulan,$tahun);
      $kaspersediaankreditbybulan = $this->neracaModel->sumpersediaankreditbybulan($bulan,$tahun);
      $kaspersediaandebitbybulan = $this->neracaModel->sumpersediaandebitbybulan($bulan,$tahun);
      $kasiklankreditbybulan = $this->neracaModel->sumiklankreditbybulan($bulan,$tahun);
      $kasiklandebitbybulan = $this->neracaModel->sumiklandebitbybulan($bulan,$tahun);
      $kasgajikreditbybulan = $this->neracaModel->sumgajikreditbybulan($bulan,$tahun);
      $kasgajidebitbybulan = $this->neracaModel->sumgajidebitbybulan($bulan,$tahun);
      $kaslistrikkreditbybulan = $this->neracaModel->sumlistrikkreditbybulan($bulan,$tahun);
      $kaslistrikdebitbybulan = $this->neracaModel->sumlistrikdebitbybulan($bulan,$tahun);
      $kaspiutangkreditbybulan = $this->neracaModel->sumpiutangkreditbybulan($bulan,$tahun);
      $kaspiutangdebitbybulan = $this->neracaModel->sumpiutangdebitbybulan($bulan,$tahun);
      $kreditbybulan = $this->neracaModel->sumkreditbybulan($bulan,$tahun);
      $debitbybulan = $this->neracaModel->sumdebitbybulan($bulan,$tahun);
     } else {
      $kaskreditbybulan = $this->neracaModel->sumKaskredit();
      $kasdebitbybulan = $this->neracaModel->sumKasdebit();
      $kaspemasukankreditbybulan = $this->neracaModel->sumpemasukankredit();
      $kaspemasukandebitbybulan = $this->neracaModel->sumpemasukandebit();
      $kasperalatankreditbybulan = $this->neracaModel->sumperalatankredit();
      $kasperalatandebitbybulan = $this->neracaModel->sumperalatandebit();
      $kaspersediaankreditbybulan = $this->neracaModel->sumpersediaankredit();
      $kaspersediaandebitbybulan = $this->neracaModel->sumpersediaandebit();
      $kasiklankreditbybulan = $this->neracaModel->sumiklankredit();
      $kasiklandebitbybulan = $this->neracaModel->sumiklandebit();
      $kasgajikreditbybulan = $this->neracaModel->sumgajikredit();
      $kasgajidebitbybulan = $this->neracaModel->sumgajidebit();
      $kaslistrikkreditbybulan = $this->neracaModel->sumlistrikkredit();
      $kaslistrikdebitbybulan = $this->neracaModel->sumlistrikdebit();
      $kaspiutangkreditbybulan = $this->neracaModel->sumpiutangkredit();
      $kaspiutangdebitbybulan = $this->neracaModel->sumpiutangdebit();
      $kreditbybulan = $this->neracaModel->sumkredit();
      $debitbybulan = $this->neracaModel->sumdebit();
    } 
     
    $data = [
      'title' =>'Neraca | SIA',
       'joinjurnalumum' => $neraca->joinJurnalumum(),
       'jurnalumum' => $neraca->getJurnalumum(),
       'akun' => $neraca->getAkun(),
       'kaskredit' =>  $kaskreditbybulan,
       'kasdebit' =>  $kasdebitbybulan, 
       'pemasukankredit' =>$kaspemasukankreditbybulan, 
       'pemasukandebit' =>$kaspemasukandebitbybulan, 
       'peralatankredit' => $kasperalatankreditbybulan,
       'peralatandebit' => $kasperalatandebitbybulan,
       'persediaankredit' => $kaspersediaankreditbybulan,
       'persediaandebit' => $kaspersediaandebitbybulan,
       'iklankredit' => $kasiklankreditbybulan,
       'iklandebit' => $kasiklandebitbybulan,
       'gajikredit' => $kasgajikreditbybulan,
       'gajidebit' => $kasgajidebitbybulan,
       'listrikkredit' => $kaslistrikkreditbybulan,
       'listrikdebit' => $kaslistrikdebitbybulan,
       'piutangdebit' => $kaspiutangdebitbybulan,
       'piutangkredit' => $kaspiutangkreditbybulan,
       'kredit' => $kreditbybulan,
       'debit' => $debitbybulan,
       ];
     
     return view ('neraca/index', $data);
  }
  

  public function cetak()
  {
    $neraca = $this->neracaModel;
    $bulan = $this->request->getVar('bulan');
    $tahun = $this->request->getVar('tahun');
     if ($bulan && $tahun) {
      $kaskreditbybulan = $this->neracaModel->sumKaskreditbybulan($bulan,$tahun);
      $kasdebitbybulan = $this->neracaModel->sumKasdebitbybulan($bulan,$tahun);
      $kaspemasukankreditbybulan = $this->neracaModel->sumpemasukankreditbybulan($bulan,$tahun);
      $kaspemasukandebitbybulan = $this->neracaModel->sumpemasukandebitbybulan($bulan,$tahun);
      $kasperalatankreditbybulan = $this->neracaModel->sumperalatankreditbybulan($bulan,$tahun);
      $kasperalatandebitbybulan = $this->neracaModel->sumperalatandebitbybulan($bulan,$tahun);
      $kaspersediaankreditbybulan = $this->neracaModel->sumpersediaankreditbybulan($bulan,$tahun);
      $kaspersediaandebitbybulan = $this->neracaModel->sumpersediaandebitbybulan($bulan,$tahun);
      $kasiklankreditbybulan = $this->neracaModel->sumiklankreditbybulan($bulan,$tahun);
      $kasiklandebitbybulan = $this->neracaModel->sumiklandebitbybulan($bulan,$tahun);
      $kasgajikreditbybulan = $this->neracaModel->sumgajikreditbybulan($bulan,$tahun);
      $kasgajidebitbybulan = $this->neracaModel->sumgajidebitbybulan($bulan,$tahun);
      $kaslistrikkreditbybulan = $this->neracaModel->sumlistrikkreditbybulan($bulan,$tahun);
      $kaslistrikdebitbybulan = $this->neracaModel->sumlistrikdebitbybulan($bulan,$tahun);
      $kaspiutangkreditbybulan = $this->neracaModel->sumpiutangkreditbybulan($bulan,$tahun);
      $kaspiutangdebitbybulan = $this->neracaModel->sumpiutangdebitbybulan($bulan,$tahun);
      $kreditbybulan = $this->neracaModel->sumkreditbybulan($bulan,$tahun);
      $debitbybulan = $this->neracaModel->sumdebitbybulan($bulan,$tahun);
     } else {
      $kaskreditbybulan = $this->neracaModel->sumKaskredit();
      $kasdebitbybulan = $this->neracaModel->sumKasdebit();
      $kaspemasukankreditbybulan = $this->neracaModel->sumpemasukankredit();
      $kaspemasukandebitbybulan = $this->neracaModel->sumpemasukandebit();
      $kasperalatankreditbybulan = $this->neracaModel->sumperalatankredit();
      $kasperalatandebitbybulan = $this->neracaModel->sumperalatandebit();
      $kaspersediaankreditbybulan = $this->neracaModel->sumpersediaankredit();
      $kaspersediaandebitbybulan = $this->neracaModel->sumpersediaandebit();
      $kasiklankreditbybulan = $this->neracaModel->sumiklankredit();
      $kasiklandebitbybulan = $this->neracaModel->sumiklandebit();
      $kasgajikreditbybulan = $this->neracaModel->sumgajikredit();
      $kasgajidebitbybulan = $this->neracaModel->sumgajidebit();
      $kaslistrikkreditbybulan = $this->neracaModel->sumlistrikkredit();
      $kaslistrikdebitbybulan = $this->neracaModel->sumlistrikdebit();
      $kaspiutangkreditbybulan = $this->neracaModel->sumpiutangkredit();
      $kaspiutangdebitbybulan = $this->neracaModel->sumpiutangdebit();
      $kreditbybulan = $this->neracaModel->sumkredit();
      $debitbybulan = $this->neracaModel->sumdebit();
    } 
     
    $data = [
      'title' =>'Neraca | SIA',
       'joinjurnalumum' => $bulan,
       'jurnalumum' => $neraca->getJurnalumum(),
       'akun' => $neraca->getAkun(),
       'kaskredit' =>  $kaskreditbybulan,
       'kasdebit' =>  $kasdebitbybulan, 
       'pemasukankredit' =>$kaspemasukankreditbybulan, 
       'pemasukandebit' =>$kaspemasukandebitbybulan, 
       'peralatankredit' => $kasperalatankreditbybulan,
       'peralatandebit' => $kasperalatandebitbybulan,
       'persediaankredit' => $kaspersediaankreditbybulan,
       'persediaandebit' => $kaspersediaandebitbybulan,
       'iklankredit' => $kasiklankreditbybulan,
       'iklandebit' => $kasiklandebitbybulan,
       'gajikredit' => $kasgajikreditbybulan,
       'gajidebit' => $kasgajidebitbybulan,
       'listrikkredit' => $kaslistrikkreditbybulan,
       'listrikdebit' => $kaslistrikdebitbybulan,
       'piutangdebit' => $kaspiutangdebitbybulan,
       'piutangkredit' => $kaspiutangkreditbybulan,
       'kredit' => $kreditbybulan,
       'debit' => $debitbybulan,
       ];
     return view ('neraca/cetak', $data);
  }
  
}