<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        $data['title'] = 'Login';
        return view('pages/auth/login', $data);
    }

    public function login()
    {
        $rules = [
            'nip' => 'required',
            'password' => 'required',
        ];

        if(!$this->validate($rules))
        {
            $data['title'] = 'Login';
            return view('pages/auth/login', $data);
        }

        $session = session();
        $nip = $this->request->getPost('nip');
        $password = $this->request->getPost('password');
        
        $data = $this->user->where('nip', $nip)->first();

        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                if($data['is_pegawai'] == TRUE)
                {
                    $ses_data = [
                        'id' => $data['id'],
                        'nama' => $data['nama'],
                        'nip' => $data['nip'],
                        'is_pegawai' => 1,
                        'isLogin' => true
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/pegawai/dashboard');
                }else{
                    $ses_data = [
                        'id' => $data['id'],
                        'nama' => $data['nama'],
                        'nip' => $data['nip'],
                        'is_pegawai' => 0,
                        'isLogin' => true
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/user/dashboard');
                }
            
            }else{
                $session->setFlashdata('msg', 'Password salah.');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Akun belum terdaftar.');
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
