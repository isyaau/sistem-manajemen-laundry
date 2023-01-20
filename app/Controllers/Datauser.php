<?php

namespace App\Controllers;

class Datauser extends BaseController
{
    public function index()
    {
      $user = $this->userModel;
      $data = [
    		'title' =>'Data User | SIA',
          'user'=> $user->getUser()
    	];
       return view ('datauser/index', $data);
    }
     public function create()
    {
    	$data = [
    		'title' =>'Tambah Data User| SIA',
          'validation' => \Config\Services::validation()


    	];
       return view ('datauser/create', $data);
    }

    public function save()
    {
       //validasi input
      if (!$this->validate([
         'username' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Username Harus Diisi.',
               ]
         ],
         'password' => [
            'rules' => 'required',
            'errors' => [
            'required' => 'Password Harus Diisi.',
                   ]
           ],
             'password2' => [
             'rules' => 'matches[password]',
             'errors' => [
             'matches' => 'Password Tidak Cocok.',
                  ]
             ],
         'nama_user' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Nama user Harus Diisi.',
         ]
      
            ],
            'alamat_user' => [
              'rules' => 'required',
              'errors' => [
                 'required' => 'Alamat user Harus Diisi.',
                    ]
              ],
              'no_hp' => [
              'rules' => 'required',
              'errors' => [
              'required' => 'No Hp Harus Diisi.',
       ]]]
      
       ) )
                 
       {
          return redirect()->to('/datauser/create')->withInput();
       }

       $this->userModel->save([
          'nama_user' => $this->request->getVar('nama_user'),
          'alamat_user' => $this->request->getVar('alamat_user'),
          'username' => $this->request->getVar('username'),
          'no_hp' => $this->request->getVar('no_hp'),
          'password' => password_hash ($this->request->getVar('password'), PASSWORD_DEFAULT),
          'rule' => $this->request->getVar('rule'),
    
    
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
       return redirect ()->to('/datauser');

    }

    public function delete($id_user)
    {

       $this->userModel->delete($id_user);
       session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
       return redirect()->to('/datauser');
    }

    public function edit($id_user)
    {
    	$data = [
    		'title' =>'Ubah Data User| SIA',
          'validation' => \Config\Services::validation(),
          'user' => $this->userModel->getUser($id_user)

    	];
       return view ('datauser/edit', $data);
    }

    public function update($id_user)
    {
      //validasi input
      if (!$this->validate([
         'username' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Username Harus Diisi.',
               ]
         ],
         'password' => [
            'rules' => 'required',
            'errors' => [
            'required' => 'Password Harus Diisi.',
                   ]
           ],
             'password2' => [
             'rules' => 'matches[password]',
             'errors' => [
             'matches' => 'Password Tidak Cocok.',
                  ]
             ],
         'nama_user' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Nama user Harus Diisi.',
               'is unique' => 'Nama user Sudah Ada.'
         ]
      
            ],
            'alamat_user' => [
              'rules' => 'required',
              'errors' => [
                 'required' => 'Alamat user Harus Diisi.',
                 ]
      
              ],
              'no_hp' => [
              'rules' => 'required',
              'errors' => [
              'required' => 'No Hp Harus Diisi.',
             
      ]]]
     
       ) )
                 
       {
          return redirect()->to('/datauser/edit/'. $this->request->getVar('id_user'))->withInput();
       }

    
       $this->userModel->save([
          'id_user' => $id_user,
          'nama_user' => $this->request->getVar('nama_user'),
          'alamat_user' => $this->request->getVar('alamat_user'),
          'username' => $this->request->getVar('username'),
          'no_hp' => $this->request->getVar('no_hp'),
          'password' => password_hash ($this->request->getVar('password'), PASSWORD_DEFAULT),
          'rule' => $this->request->getVar('rule'),
         
       ]);
       session()->setFlashdata('pesan', 'Data Berhasil Diubah');
       return redirect ()->to('/datauser');

    }

}