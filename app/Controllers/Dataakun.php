<?php

namespace App\Controllers;

class Dataakun extends BaseController
{
    public function index()
    {
      $akun = $this->akunModel;
    	$data = [
    		'title' =>'Data Akun | SIA',
          'akun'=> $akun->getAkun()

    	];
       return view ('dataakun/index', $data);
    }
     
    public function create()
    {
    	$data = [
    		'title' =>'Tambah Data Akun| SIA',
          'validation' => \Config\Services::validation()


    	];
       return view ('dataakun/create', $data);
    }

    public function save()
    {
       //validasi input
       if (!$this->validate([
          'nama_akun' => [
             'rules' => 'required|is_unique[tb_akun.nama_akun]',
             'errors' => [
                'required' => 'Nama Akun Harus Diisi.',
                'is unique' => 'Nama Akun Berhasil Dimasukkan.'
          ]
       
             ],
             'no_akun' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'No Akun Harus Diisi.',
                  'is unique' => 'No Akun Berhasil Dimasukkan.'
                  ]
       
             ]]
       ) )
                 
       {
          return redirect()->to('/dataakun/create')->withInput();
       }

       
       $this->akunModel->save([
          'nama_akun' => $this->request->getVar('nama_akun'),
          'no_akun' => $this->request->getVar('no_akun'),
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
       return redirect ()->to('/dataakun');

    }

    public function delete($id_akun)
    {

       $this->akunModel->delete($id_akun);
       session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
       return redirect()->to('/dataakun');
    }

    public function edit($id_akun)
    {
    	$data = [
    		'title' =>'Ubah Data Akun| SIA',
          'validation' => \Config\Services::validation(),
          'dataakun' => $this->akunModel->getAkun($id_akun)

    	];
       return view ('dataakun/edit', $data);
    }

    public function update($id_akun)
    {
       //validasi input
       if (!$this->validate([
          'nama_akun' => [
             'rules' => 'required',
             'errors' => [
                'required' => 'Nama Akun Harus Diisi.',
               
          ]
       
             ],
             'no_akun' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'No Akun Harus Diisi.',
                
                  ]
       
             ]]
       ) )
                 
       {
          return redirect()->to('/dataakun/edit/'. $this->request->getVar('id_akun'))->withInput();
       }

       $this->akunModel->save([
          'id_akun' => $id_akun,
          'nama_akun' => $this->request->getVar('nama_akun'),
          'no_akun' => $this->request->getVar('no_akun'),
         
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Diubah');
       return redirect ()->to('/dataakun');

    }
 
}