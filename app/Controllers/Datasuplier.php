<?php

namespace App\Controllers;

class Datasuplier extends BaseController
{
    public function index()
    {
      $suplier = $this->suplierModel;
      $data = [
    		'title' =>'Data Suplier | SIA',
          'suplier'=> $suplier->getSuplier()
    	];
       return view ('datasuplier/index', $data);
    }
     public function create()
    {
    	$data = [
    		'title' =>'Tambah Data Suplier| SIA',
          'validation' => \Config\Services::validation()


    	];
       return view ('datasuplier/create', $data);
    }

    public function save()
    {
       //validasi input
       if (!$this->validate([
          'nama_suplier' => [
             'rules' => 'required|is_unique[tb_suplier.nama_suplier]',
             'errors' => [
                'required' => 'Nama Suplier Harus Diisi.',
                'is unique' => 'Nama Suplier Sudah Ada.'
          ]
       
             ],
             'alamat_suplier' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Alamat Suplier Harus Diisi.',
                  ]
       
               ],
               'email' => [
                  'rules' => 'required',
                  'errors' => [
                     'required' => 'Email Harus Diisi.',
                     ]
               ],
               'no_hp' => [
               'rules' => 'required',
               'errors' => [
               'required' => 'No Hp Harus Diisi.',
       ]]]
      
       ) )
                 
       {
          return redirect()->to('/datasuplier/create')->withInput();
       }

       $this->suplierModel->save([
          'nama_suplier' => $this->request->getVar('nama_suplier'),
          'alamat_suplier' => $this->request->getVar('alamat_suplier'),
          'email' => $this->request->getVar('email'),
          'no_hp' => $this->request->getVar('no_hp'),
    
    
    
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
       return redirect ()->to('/datasuplier');

    }

    public function delete($id_suplier)
    {

       $this->suplierModel->delete($id_suplier);
       session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
       return redirect()->to('/datasuplier');
    }

    public function edit($id_suplier)
    {
    	$data = [
    		'title' =>'Ubah Data Suplier| SIA',
          'validation' => \Config\Services::validation(),
          'datasuplier' => $this->suplierModel->getSuplier($id_suplier)

    	];
       return view ('datasuplier/edit', $data);
    }

    public function update($id_suplier)
    {
       //validasi input
       if (!$this->validate([
         'nama_suplier' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Nama Suplier Harus Diisi.',
         ]
      
            ],
            'alamat_suplier' => [
              'rules' => 'required',
              'errors' => [
                 'required' => 'Alamat Suplier Harus Diisi.',
                 ]
      
              ],
              'email' => [
                 'rules' => 'required',
                 'errors' => [
                    'required' => 'Email Harus Diisi.',
                    ]
               ],
               'no_hp' => [
               'rules' => 'required',
               'errors' => [
               'required' => 'No Hp Harus Diisi.',
      ]]]
     
       ) )
                 
       {
          return redirect()->to('/datasuplier/edit/'. $this->request->getVar('id_suplier'))->withInput();
       }

    
       $this->suplierModel->save([
          'id_suplier' => $id_suplier,
          'nama_suplier' => $this->request->getVar('nama_suplier'),
          'alamat_suplier' => $this->request->getVar('alamat_suplier'),
          'email' => $this->request->getVar('email'),
          'no_hp' => $this->request->getVar('no_hp'),
         
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Diubah');
       return redirect ()->to('/datasuplier');

    }

}