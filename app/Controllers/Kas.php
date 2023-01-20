<?php

namespace App\Controllers;

class Kas extends BaseController
{
    public function index()
    {
      $kas = $this->kasModel;
      $data = [
    		'title' =>'KAS | SIA',
          'kas'=> $kas->getKas(),
          'akun'=> $kas->getAkun(),
          'joinakun'=> $kas->joinAkun(),
    	];
       return view ('kas/index', $data);
    }
     public function create()
    {
      $kas = $this->kasModel;
    	$data = [
    		'title' =>'Tambah Kas| SIA',
          'validation' => \Config\Services::validation(),
          'akun'=> $kas->getAkun(),


    	];
       return view ('kas/create', $data);
    }

    public function save()
    {
       //validasi input
       if (!$this->validate([
          'no_akun' => [
             'rules' => 'required',
             'errors' => [
                'required' => 'No akun Harus Diisi.',
              
          ]
       
             ],
             'akun' => [
               'rules' => 'required',
               'errors' => [
                  'required' => ' Akun Harus Diisi.',
                
            ]
         
               ],
             'keterangan' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Keterangan Suplier Harus Diisi.',
                  ]
       
               ],
               'total' => [
                  'rules' => 'required',
                  'errors' => [
                     'required' => 'Total Harus Diisi.',
              
       ]]]
      
       ) )
                 
       {
          return redirect()->to('/kas/create')->withInput();
       }

       $this->kasModel->save([
          'no_akun' => $this->request->getVar('no_akun'),
          'akun' => $this->request->getVar('akun'),
          'keterangan' => $this->request->getVar('keterangan'),
          'total' => $this->request->getVar('total'),
          
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
       return redirect ()->to('/kas');

    }

    public function delete($id_kas)
    {

       $this->kasModel->delete($id_kas);
       session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
       return redirect()->to('/kas');
    }

    public function edit($id_kas)
    {
    	$data = [
    		'title' =>'Ubah KAS| SIA',
          'validation' => \Config\Services::validation(),
          'kas' => $this->kasModel->getKas($id_kas)

    	];
       return view ('kas/edit', $data);
    }

    public function update($id_kas)
    {
       //validasi input
       if (!$this->validate([
         'no_akun' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'No akun Harus Diisi.',
               
         ]
      
            ],
            'akun' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Akun Harus Diisi.',
                 
            ]
         
               ],
            'keterangan' => [
              'rules' => 'required',
              'errors' => [
                 'required' => 'Keterangan Suplier Harus Diisi.',
                 ]
      
              ],
              'total' => [
                 'rules' => 'required',
                 'errors' => [
                    'required' => 'Total Harus Diisi.',
      ]]]
     
       ) )
                 
       {
          return redirect()->to('/kas/edit/'. $this->request->getVar('id_kas'))->withInput();
       }

    
       $this->kasModel->save([
          'id_kas' => $id_kas,
          'akun' => $this->request->getVar('akun'),
          'no_akun' => $this->request->getVar('no_akun'),
          'keterangan' => $this->request->getVar('keterangan'),
          'total' => $this->request->getVar('total'),

         
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Diubah');
       return redirect ()->to('/kas');

    }

}