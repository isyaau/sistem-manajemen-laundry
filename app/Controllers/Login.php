<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
    	$data = [
    		'title' =>'Login | SIA'

    	];
       return view ('login/index', $data);
    }

    public function auth()
    {
        $session = session();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $this->userModel->where('username',$username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass){
                $ses_data = [
                    'id_user'        => $data['id_user'],
                    'nama_user'      => $data['nama_user'],
                    'alamat_user'    => $data['alamat_user'],
                    'username'       => $data['username'],
                    'no_hp'          => $data['no_hp'],
                    'created_at'     => $data['created_at'],
                    'rule'           => $data['rule'],
                    'logged_in '     => TRUE
                ];
               $session->set($ses_data);
               
               return redirect()->to('/dashboard');
            }else{

                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
            } else {
                $session->setFlashdata('msg', 'Username not found');
                return redirect()->to('/login');
            }
        }

        public function logout()
        {
            $session = session();
            $session->destroy();
            return redirect()->to('/login');
        }

    }