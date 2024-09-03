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
        // Ambil dari input
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $validation = \Config\Services::validation();

        // Rule validation
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

        // Penerapan validation
        if (!$valid) {
            $sessError = [
                'errUsername' => $validation->getError('username'),
                'errPassword' => $validation->getError('password')
            ];

            session()->setFlashdata($sessError);
            return redirect()->to('/');
        } else {
            $loginModel = new LoginModel();

            // Cek user di db berdasarkan username
            $db = $loginModel->where('username', $username)->first();

            if ($db == null) {
                session()->setFlashdata('pesan', 'Maaf user tidak terdaftar');
                return redirect()->to('/');
            } else {
                // Ambil password dari db
                $passwordUser = $db['password'];

                // Bandingkan password langsung (tanpa password_verify)
                if ($password == $passwordUser) {
                    // Jika password benar, lanjutkan proses login
                    $simpan_session = [
                        'username' => $db['username'],
                        'role' => $db['role'],
                        'id' => $db['id'],
                    ];

                    session()->set($simpan_session);
                    return redirect()->to('/home');
                } else {
                    // Set flashdata for error message
                    session()->setFlashdata('alert', 'Username atau Password Anda Salah!');
                    return redirect()->to('/');
                }
            }
        }
    }



    public function keluar()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
