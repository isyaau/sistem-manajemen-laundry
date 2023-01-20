<?php

namespace App\Controllers;

class Kiloan extends BaseController
{
    public function index()
    {
      $kiloan = $this->kiloanModel-> get_where();		
      $data = [
    		'title' =>'Kiloan | SIA',
         'kiloan'=> $kiloan->getKiloan()
          
    	];
       return view ('kiloan/index', $data);
    }

     public function create()
    {
    	$data = [
    		'title' =>'Tambah Data Laundry Kiloan| SIA',
          'validation' => \Config\Services::validation()

    	];
       return view ('kiloan/create', $data);
    }

    public function save()
    {
       //validasi input
       if (!$this->validate([
          'jenis_laundry' => [
             'rules' => 'required|is_unique[tb_laundry.jenis_laundry]',
             'errors' => [
                'required' => 'Jenis Laundry Harus Diisi.',
                'is unique' => 'Jenis Laundry Berhasil Dimasukkan.'
          ]
             ],
             'harga' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Harga Laundry Harus Diisi.',
                  'is unique' => 'Harga Laundry Berhasil Dimasukkan.'
                  ]
             ]]
       ) )           
       {
          return redirect()->to('/kiloan/create')->withInput();
       }
       $tipelaundry = 'Kiloan';
       $this->kiloanModel->save([
          'jenis_laundry' => $this->request->getVar('jenis_laundry'),
          'harga' => $this->request->getVar('harga'),
          'tipe' => $tipelaundry,
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
       return redirect ()->to('/kiloan');

    }

    public function delete($id_laundry)
    {

       $this->kiloanModel->delete($id_laundry);
       session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
       return redirect()->to('/kiloan');
    }

    public function edit($id_laundry)
    {
    	$data = [
    		'title' =>'Ubah Data Laundry Kiloan| SIA',
          'validation' => \Config\Services::validation(),
          'kiloan' => $this->kiloanModel->getKiloan($id_laundry)

    	];
       return view ('kiloan/edit', $data);
    }

    public function update($id_laundry)
    {
       //validasi input
       if (!$this->validate([
          'jenis_laundry' => [
             'rules' => 'required',
             'errors' => [
                'required' => 'Jenis Laundry Harus Diisi.',
          ]
             ],
             'harga' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Harga Laundry Harus Diisi.',
                  'is unique' => 'Harga Laundry Berhasil Dimasukkan.'
                  ]
             ]]
       ) )         
       {
          return redirect()->to('/kiloan/edit/'. $this->request->getVar('id_laundry'))->withInput();
       }

       $tipelaundry = 'Kiloan';
       $this->kiloanModel->save([
          'id_laundry' => $id_laundry,
          'jenis_laundry' => $this->request->getVar('jenis_laundry'),
          'harga' => $this->request->getVar('harga'),
          'tipe' => $tipelaundry,
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Diubah');
       return redirect ()->to('/kiloan');

    }


   }