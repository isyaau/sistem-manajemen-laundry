<?php

namespace App\Controllers;

class Satuan extends BaseController
{
    public function index()
    {
      $satuan = $this->satuanModel-> get_where();		
      $data = [
    		'title' =>'Satuan | SIA',
          'satuan'=> $satuan->getSatuan()
          
    	];
       return view ('satuan/index', $data);
    }
    public function create()
    {
    	$data = [
    		'title' =>'Tambah Data Laundry Satuan| SIA',
          'validation' => \Config\Services::validation()

    	];
       return view ('satuan/create', $data);
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
          return redirect()->to('/satuan/create')->withInput();
       }

       $tipelaundry = 'Satuan';
       $this->satuanModel->save([
          'jenis_laundry' => $this->request->getVar('jenis_laundry'),
          'harga' => $this->request->getVar('harga'),
          'tipe' => $tipelaundry,
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
       return redirect ()->to('/satuan');

    }

    public function delete($id_laundry)
    {

       $this->satuanModel->delete($id_laundry);
       session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
       return redirect()->to('/satuan');
    }

    public function edit($id_laundry)
    {
    	$data = [
    		'title' =>'Ubah Data Laundry Satuan| SIA',
          'validation' => \Config\Services::validation(),
          'satuan' => $this->satuanModel->getSatuan($id_laundry)

    	];
       return view ('satuan/edit', $data);
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
          return redirect()->to('/satuan/edit/'. $this->request->getVar('id_laundry'))->withInput();
       }

       $tipelaundry = 'Satuan';
       $this->satuanModel->save([
          'id_laundry' => $id_laundry,
          'jenis_laundry' => $this->request->getVar('jenis_laundry'),
          'harga' => $this->request->getVar('harga'),
          'tipe' => $tipelaundry,
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Diubah');
       return redirect ()->to('/satuan');

    }

}