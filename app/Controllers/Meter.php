<?php

namespace App\Controllers;

class Meter extends BaseController
{
    public function index()
    {
      $meteran = $this->meteranModel-> get_where();		
      $data = [
    		'title' =>'Meteran | SIA',
         'meteran'=> $meteran->getMeteran()
          
    	];
       return view ('meter/index', $data);
    }

     public function create()
    {
    	$data = [
    		'title' =>'Tambah Data Laundry Meteran| SIA',
          'validation' => \Config\Services::validation()

    	];
       return view ('meter/create', $data);
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
          return redirect()->to('/meter/create')->withInput();
       }

       $tipelaundry = 'Meteran';
       $this->meteranModel->save([
          'jenis_laundry' => $this->request->getVar('jenis_laundry'),
          'harga' => $this->request->getVar('harga'),
          'tipe' => $tipelaundry,
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
       return redirect ()->to('/meter');

    }

    public function delete($id_laundry)
    {

       $this->meteranModel->delete($id_laundry);
       session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
       return redirect()->to('/meter');
    }

    public function edit($id_laundry)
    {
    	$data = [
    		'title' =>'Ubah Data Laundry Meteran| SIA',
          'validation' => \Config\Services::validation(),
          'meter' => $this->meteranModel->getMeteran($id_laundry)

    	];
       return view ('meter/edit', $data);
    }

    public function update($id_laundry)
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
          return redirect()->to('/meter/edit/'. $this->request->getVar('id_laundry'))->withInput();
       }

       $tipelaundry = 'Meteran';
       $this->meteranModel->save([
          'id_laundry' => $id_laundry,
          'jenis_laundry' => $this->request->getVar('jenis_laundry'),
          'harga' => $this->request->getVar('harga'),
          'tipe' => $tipelaundry,
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Diubah');
       return redirect ()->to('/meter');

    }
   }