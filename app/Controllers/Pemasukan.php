<?php

namespace App\Controllers;

class Pemasukan extends BaseController
{
   public function index()
   {
      $pemasukan = $this->pemasukanModel;
      $data = [
         'title' => 'Pemasukan | SIA',
         'pemasukan' => $pemasukan->getPemasukan(),
         'kiloan' => $pemasukan->getLaundry(),
         'joinpemasukan' => $pemasukan->joinLaundry(),
      ];
      return view('pemasukan/index', $data);
   }
   public function create()
   {
      $pemasukan = $this->pemasukanModel;
      $data = [
         'title' => 'Tambah Data Pemasukan| SIA',
         'akun'=> $pemasukan->getAkun(),
         'pemasukan' => $pemasukan->getPemasukan(),
         'laundry' => $pemasukan->getLaundry(),
         'joinpemasukan' => $pemasukan->joinLaundry(),
         'total' => $pemasukan->getTotal(),
         'validation' => \Config\Services::validation()

      ];
      return view('pemasukan/create', $data);
   }

   public function createkas()
   {
      $pemasukan = $this->pemasukanModel;
      $data = [
         'title' => 'Tambah Data Pemasukan| SIA',
         'akun'=> $pemasukan->getAkun(),
         'pemasukan' => $pemasukan->getPemasukan(),
         'laundry' => $pemasukan->getLaundry(),
         'joinpemasukan' => $pemasukan->joinLaundry(),
         'total' => $pemasukan->getTotal(),
         'validation' => \Config\Services::validation()

      ];
      return view('pemasukan/createkas', $data);
   }

   public function save2()
   {
      $pemasukan = $this->pemasukanModel->getLaundry();
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
         return redirect()->to('/pemasukan/createkas')->withInput();
      }
      
      //  $satuan=3000;
      //  $jenis_laundry=$this->request->getVar('jenis_laundry');
      
      $this->pemasukanModel->save([
         'id_pemasukan' => $this->request->getVar('id_pemasukan'),
         'no_akun' => $this->request->getVar('no_akun'),
         'keterangan' => $this->request->getVar('keterangan'),
         'total' => $this->request->getVar('total'),

      ]);
      session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
      return redirect()->to('/pemasukan');
   }

   public function save()
   {
      $pemasukan = $this->pemasukanModel->getLaundry();
      //validasi input
      if (!$this->validate(
         [
            'id_laundry' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Id Laundry Harus Diisi.',
               ]
            ],
            'nama_pelanggan' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Nama Harus Diisi.',
               ]
            ],
            'alamat' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Alamat Harus Diisi.',
               ]
            ],
            'no_hp' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Nomor Hp Harus Diisi.',
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
                  'required' => 'Keterangan Harus Diisi.',
               ]
            ],
            'diskon' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Diskon Harus Diisi.',
               ]
            ],
            'transaksi' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Transaksi Harus Diisi.',
               ]
            ],
         ]

         

      )) {
         return redirect()->to('/pemasukan/create')->withInput();
      }
      
      //  $satuan=3000;
      //  $jenis_laundry=$this->request->getVar('jenis_laundry');
      
      $harga = $this->kiloanModel->find($this->request->getVar('id_laundry'));
      
      $total= $harga['harga'] * $this->request->getVar('jumlah');  
      $diskon= $harga['harga'] * $this->request->getVar('jumlah') * $this->request->getVar('diskon')/100;
      $hasil= $total-$diskon;
      
      $this->pemasukanModel->save([
         'id_pemasukan' => $this->request->getVar('id_pemasukan'),
         'id_laundry' => $this->request->getVar('id_laundry'),
         'no_akun' => $this->request->getVar('no_akun'),
         'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
         'alamat' => $this->request->getVar('alamat'),
         'no_hp' => $this->request->getVar('no_hp'),
         'jumlah' => $this->request->getVar('jumlah'),
         'keterangan' => $this->request->getVar('keterangan'),
         'diskon' => $this->request->getVar('diskon'),
         'transaksi' => $this->request->getVar('transaksi'),
         'dp_trx' => $this->request->getVar('dp_trx'),
         'total' => $hasil,
      ]);
      session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
      return redirect()->to('/pemasukan');
   }

   public function delete($id_pemasukan)
   {
      $this->pemasukanModel->delete($id_pemasukan);
      $this->jurnalumumModel->delete($id_pemasukan);
      $this->kasModel->delete($id_pemasukan);
      session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
      return redirect()->to('/pemasukan');
   }

   public function edit($id_pemasukan)
   {
      $data = [
         'title' => 'Ubah Data Pemasukan| SIA',
         'akun'=> $this->pemasukanModel->getAkun(),
         'validation' => \Config\Services::validation(),
         'pemasukan' => $this->pemasukanModel->getPemasukan($id_pemasukan),
         'laundry' => $this->pemasukanModel->getLaundry(),
         'joinpemasukan' => $this->pemasukanModel->joinLaundry(),
         'joinakun' => $this->pemasukanModel->joinAkun(),
        

      ];
      return view('pemasukan/edit', $data);
   }

   public function update($id_pemasukan)
   {
      //validasi input
      if (!$this->validate(
         [
            'id_laundry' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Id Laundry Harus Diisi.',
               ]
            ],
            'nama_pelanggan' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Nama Harus Diisi.',
               ]
            ],   
            'alamat' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Alamat Harus Diisi.',
               ]
            ],  
            'no_hp' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'No Hp Harus Diisi.',
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
                  'required' => 'Keterangan Harus Diisi.',
               ]
            ],
            'diskon' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Diskon Harus Diisi.',
               ]
            ],
            'transaksi' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Transaksi Harus Diisi.',
               ]
            ],
            'dp_trx' => [
               'rules' => 'required',
               'errors' => [
                  'required' => 'Nominal Harus Diisi.',
               ]
            ],
         ]

      )) {
         return redirect()->to('/pemasukan/edit/' . $this->request->getVar('id_pemasukan'))->withInput();
      }


   
      $this->pemasukanModel->save([
         'id_pemasukan'   => $id_pemasukan,
         'id_laundry'     => $this->request->getVar('id_laundry'),
         'no_akun'        => $this->request->getVar('no_akun'),
         'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
         'alamat'         => $this->request->getVar('alamat'),
         'no_hp'          => $this->request->getVar('no_hp'),
         'jumlah'         => $this->request->getVar('jumlah'),
         'keterangan'     => $this->request->getVar('keterangan'),
         'diskon'         => $this->request->getVar('diskon'),
         'transaksi'      => $this->request->getVar('transaksi'),
         'dp_trx'      => $this->request->getVar('dp_trx'),


      ]);
      session()->setFlashdata('pesan', 'Data Berhasil Diubah');
      return redirect()->to('/pemasukan');
   }

   public function cetak($id_pemasukan)
   {
      // $laundry = $this->kiloanModel->find($id_pemasukan);
      $pemasukan = $this->pemasukanModel;
      $data = [
         'title' => 'Cetak | SIA',
         'pemasukan' => $pemasukan->getPemasukan(),
         'laundry' => $pemasukan->getLaundry(),
         'joinpemasukan' => $pemasukan->joinLaundry($id_pemasukan),

      ];
      if (empty($data['joinpemasukan'])) {
         throw new \Codeigniter\Exceptions\PageNotFoundException('Id Pemasukan'. $id_pemasukan. 'tidak ditemukan');
      }
      return view('pemasukan/cetak', $data);
   }
}