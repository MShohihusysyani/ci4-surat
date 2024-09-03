<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        $data['title'] = 'Login';
        return view('login/index', $data);
    }
    public function cekUser()
    {
        //Ambil dari input
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $validation = \Config\Services::validation();

        //Rule validation
        $valid = $this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],

            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);

        //penerapan validation
        if (!$valid) {
            $sessError = [
                'errUsername' => $validation->getError('username'),
                'errPassword' => $validation->getError('password')
            ];

            session()->setFlashdata($sessError);
            return redirect()->to('/');
        } else {
            $loginModel = new LoginModel();

            //jika tidak ada user di db
            $id = $loginModel->select('id')->where('username', $username);

            $cekUserLogin = $loginModel->find($id);
            // dd($cekUserLogin);
            if ($cekUserLogin == null) {
                // dd($cekUserLogin);
                session()->setFlashdata('alert', 'Maaf User tidak terdaftar');
                return redirect()->to('/');
            } else {
                // $passwordUser = $cekUserLogin['password'];
                $db = $loginModel->where('username', $username)->first();
                $passwordUser = $db['password'];

                //jika password benar
                if (password_verify($password, $passwordUser)) {
                    //LANJUTKAN
                    $simpan_session = [
                        'username' => $db['username'],
                        'role' => $db['role'],
                        'id' => $db['id'],
                    ];
                    // dd($simpan_session);
                    session()->set($simpan_session);
                    session()->setFlashdata('pesan', 'Anda Berhasil Login');
                    return redirect()->to('/home');
                } else {
                    session()->setFlashdata('alert', 'Username atau Password anda salah!');
                    return redirect()->to('/');
                }
            }
        }
    }


    public function keluar()
    {
        session()->setFlashdata('pesan', 'Berhasil Logout');
        session()->destroy();
        return redirect()->to('/');
    }
}
