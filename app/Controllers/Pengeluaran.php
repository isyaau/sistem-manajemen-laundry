<?php

namespace App\Controllers;

class Pengeluaran extends BaseController
{
    public function index()
    {
      $pengeluaran = $this->pengeluaranModel;		
      $data = [
    		'title' =>'Pengeluaran | SIA',
          'pengeluaran'=> $pengeluaran->getPengeluaran(),
          'akun' => $pengeluaran->getAkun(),
         'joinakun' => $pengeluaran->joinAkun(),
    	];
       return view ('pengeluaran/index', $data);
    }
     public function create()
    {
      $pengeluaran = $this->pengeluaranModel;	
    	$data = [
    		'title' =>'Tambah Data Pengeluaran| SIA',
          'akun'=> $pengeluaran->getAkun(),
          'pengeluaran' => $pengeluaran->getPengeluaran(),
          'joinakun' => $pengeluaran->joinAkun(),
          'validation' => \Config\Services::validation()

    	];
       return view ('pengeluaran/create', $data);
    }

    public function createkas()
    {
      $pengeluaran = $this->pengeluaranModel;	
    	$data = [
    		'title' =>'Tambah Data Pengeluaran| SIA',
          'akun'=> $pengeluaran->getAkun(),
          'pengeluaran' => $pengeluaran->getPengeluaran(),
          'joinakun' => $pengeluaran->joinAkun(),
          'validation' => \Config\Services::validation()

    	];
       return view ('pengeluaran/createkas', $data);
    }

    public function save2()
    {
       //validasi input
       if (!$this->validate(
          [
             'keterangan' => [
                'rules' => 'required',
                'errors' => [
                   'required' => 'Keterangan Harus Diisi.',
                ]
             ],
             'total' => [
                'rules' => 'required',
                'errors' => [
                   'required' => 'Total Harus Diisi.',
                ]
             ],
          ]
 
       )) {
          return redirect()->to('/pengeluaran/createkas')->withInput();
       }
       
       //  $satuan=3000;
       //  $jenis_laundry=$this->request->getVar('jenis_laundry');
       
       $this->pengeluaranModel->save([
          'id_pengeluaran' => $this->request->getVar('id_pengeluaran'),
          'no_akun' => $this->request->getVar('no_akun'),
          'keterangan' => $this->request->getVar('keterangan'),
          'total' => $this->request->getVar('total'),
 
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
       return redirect()->to('/pengeluaran');
    }
 

    public function save()
    {
       //validasi input
       if (!$this->validate([
          'no_akun' => [
             'rules' => 'required',
             'errors' => [
                'required' => 'No Akun Harus Diisi.',
          ]
       
             ],
             'jenis' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Jenis Akun Harus Diisi.',
            ]
               ],
               'satuan' => [
                  'rules' => 'required',
                  'errors' => [
                     'required' => 'Satuan Harus Diisi.',
                     ]
               ],
               'jumlah' => [
               'rules' => 'required',
               'errors' => [
               'required' => 'Jumlah Harus Diisi.',
               ],
               'keterangan' => [
                  'rules' => 'required',
                  'errors' => [
                  'required' => 'Keterangan Harus Diisi.',
               
       ]]]]
      
       ) )
                 
       {
          return redirect()->to('/pengeluaran/create')->withInput();
       }
       $total=$this->request->getVar('satuan') * $this->request->getVar('jumlah');
       $this->pengeluaranModel->save([
          'no_akun' => $this->request->getVar('no_akun'),
          'jenis' => $this->request->getVar('jenis'),
          'satuan' => $this->request->getVar('satuan'),
          'jumlah' => $this->request->getVar('jumlah'),
          'keterangan' => $this->request->getVar('keterangan'),
          'total'=> $total
    
    
    
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
       return redirect ()->to('/pengeluaran');

    }

    public function delete($id_pengeluaran)
    {

       $this->pengeluaranModel->delete($id_pengeluaran);
       session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
       return redirect()->to('/pengeluaran');
    }

    public function edit($id_pengeluaran)
    {
    	$data = [
    		'title' =>'Ubah Data Pengeluaran| SIA',
          'validation' => \Config\Services::validation(),
          'pengeluaran' => $this->pengeluaranModel->getPengeluaran($id_pengeluaran),
          'akun' => $this->pengeluaranModel->getAkun(),
          'joinpengeluaran' => $this->pengeluaranModel->joinAkun(),
 
    	];
       return view ('pengeluaran/edit', $data);
    }

    public function update($id_pengeluaran)
    {
       //validasi input
       if (!$this->validate([
         'no_akun' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'No Akun Harus Diisi.',
         ]
      
            ],
            'jenis' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Jenis Harus Diisi.',
            ]
         
               ],
              'satuan' => [
                 'rules' => 'required',
                 'errors' => [
                    'required' => 'Satuan Harus Diisi.',
                    ]
               ],
               'jumlah' => [
               'rules' => 'required',
               'errors' => [
               'required' => 'Jumlah Harus Diisi.',
                     ]
               ],
               'keterangan' => [
               'rules' => 'required',
               'errors' => [
               'required' => 'keterangan Harus Diisi.',
                ]
                     
      ]]
     
       ) )
                 
       {
          return redirect()->to('/pengeluaran/edit/'. $this->request->getVar('id_pengeluaran'))->withInput();
       }

      
       $this->pengeluaranModel->save([
          'id_pengeluaran' => $id_pengeluaran,
          'no_akun' => $this->request->getVar('no_akun'),
          'jenis' => $this->request->getVar('jenis'),
          'satuan' => $this->request->getVar('satuan'),
          'jumlah' => $this->request->getVar('jumlah'),
          'keterangan' => $this->request->getVar('keterangan'),
         
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Diubah');
       return redirect ()->to('/pengeluaran');

    }
}