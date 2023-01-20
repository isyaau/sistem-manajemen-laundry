<?php

namespace App\Controllers;

class Labarugi extends BaseController
{
   public function index()
  {
    $labarugi = $this->labarugiModel;
    $bulan = $this->request->getVar('bulan');
    $tahun = $this->request->getVar('tahun');
     if ($bulan && $tahun) {
       $kaskreditbybulan = $this->labarugiModel->sumKaskreditbybulan($bulan,$tahun);
       $kasdebitbybulan = $this->labarugiModel->sumKasdebitbybulan($bulan,$tahun);
       $kaspemasukanbybulan = $this->labarugiModel->sumpemasukanbybulan($bulan,$tahun);
       $kasperalatanbybulan = $this->labarugiModel->sumperalatanbybulan($bulan,$tahun);
       $kaspersediaanbybulan = $this->labarugiModel->sumpersediaanbybulan($bulan,$tahun);
       $kasbebaniklanbybulan = $this->labarugiModel->sumbebaniklanbybulan($bulan,$tahun);
       $kasbebangajibybulan = $this->labarugiModel->sumbebangajibybulan($bulan,$tahun);
       $kasbebanlistrikbybulan = $this->labarugiModel->sumbebanlistrikbybulan($bulan,$tahun);
       $kasbebanpiutangbybulan = $this->labarugiModel->sumpiutangbybulan($bulan,$tahun);
     } else {
      $kaskreditbybulan = $this->labarugiModel->sumKaskredit();
      $kasdebitbybulan = $this->labarugiModel->sumKasdebit();
      $kaspemasukanbybulan = $this->labarugiModel->sumpemasukan();
      $kasperalatanbybulan = $this->labarugiModel->sumperalatan();
      $kaspersediaanbybulan = $this->labarugiModel->sumpersediaan();
      $kasbebaniklanbybulan = $this->labarugiModel->sumbebaniklan();
      $kasbebangajibybulan = $this->labarugiModel->sumbebangaji();
      $kasbebanlistrikbybulan = $this->labarugiModel->sumbebanlistrik();
      $kasbebanpiutangbybulan = $this->labarugiModel->sumpiutang();
    } 
     
    $data = [
      'title' =>'Laba Rugi | SIA',
       'joinjurnalumum' => $labarugi->joinJurnalumum(),
       'jurnalumum' => $labarugi->getJurnalumum(),
       'akun' => $labarugi->getAkun(),
       'kaskredit' =>  $kaskreditbybulan,
       'kasdebit' =>  $kasdebitbybulan, 
       'pemasukan' =>$kaspemasukanbybulan, 
       'peralatan' => $kasperalatanbybulan,
       'persediaan' => $kaspersediaanbybulan,
       'bebaniklan' => $kasbebaniklanbybulan,
       'bebangaji' => $kasbebangajibybulan,
       'bebanlistrik' => $kasbebanlistrikbybulan,
       'piutang' => $kasbebanpiutangbybulan,
       ];
     
     return view ('labarugi/index', $data);
  }
    public function cetak()
    {
      $labarugi = $this->labarugiModel;
      $bulan = $this->request->getVar('bulan');
      $tahun = $this->request->getVar('tahun');
       if ($bulan && $tahun) {
         $kaskreditbybulan = $this->labarugiModel->sumKaskreditbybulan($bulan,$tahun);
         $kasdebitbybulan = $this->labarugiModel->sumKasdebitbybulan($bulan,$tahun);
         $kaspemasukanbybulan = $this->labarugiModel->sumpemasukanbybulan($bulan,$tahun);
         $kasperalatanbybulan = $this->labarugiModel->sumperalatanbybulan($bulan,$tahun);
         $kaspersediaanbybulan = $this->labarugiModel->sumpersediaanbybulan($bulan,$tahun);
         $kasbebaniklanbybulan = $this->labarugiModel->sumbebaniklanbybulan($bulan,$tahun);
         $kasbebangajibybulan = $this->labarugiModel->sumbebangajibybulan($bulan,$tahun);
         $kasbebanlistrikbybulan = $this->labarugiModel->sumbebanlistrikbybulan($bulan,$tahun);
         $kasbebanpiutangbybulan = $this->labarugiModel->sumpiutangbybulan($bulan,$tahun);
       } else {
        $kaskreditbybulan = $this->labarugiModel->sumKaskredit();
        $kasdebitbybulan = $this->labarugiModel->sumKasdebit();
        $kaspemasukanbybulan = $this->labarugiModel->sumpemasukan();
        $kasperalatanbybulan = $this->labarugiModel->sumperalatan();
        $kaspersediaanbybulan = $this->labarugiModel->sumpersediaan();
        $kasbebaniklanbybulan = $this->labarugiModel->sumbebaniklan();
        $kasbebangajibybulan = $this->labarugiModel->sumbebangaji();
        $kasbebanlistrikbybulan = $this->labarugiModel->sumbebanlistrik();
        $kasbebanpiutangbybulan = $this->labarugiModel->sumpiutang();
      } 
       
      $data = [
        'title' =>'Laba Rugi | SIA',
         'joinjurnalumum' => $bulan,
         'jurnalumum' => $labarugi->getJurnalumum(),
         'akun' => $labarugi->getAkun(),
         'kaskredit' =>  $kaskreditbybulan,
         'kasdebit' =>  $kasdebitbybulan, 
         'pemasukan' =>$kaspemasukanbybulan, 
         'peralatan' => $kasperalatanbybulan,
         'persediaan' => $kaspersediaanbybulan,
         'bebaniklan' => $kasbebaniklanbybulan,
         'bebangaji' => $kasbebangajibybulan,
         'bebanlistrik' => $kasbebanlistrikbybulan,
         'piutang' => $kasbebanpiutangbybulan,
         ];
       return view ('labarugi/cetak', $data);
    }
}