<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class User extends BaseController
{
    protected $loginModel;
    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }
    public function index()
    {
        $user = $this->loginModel->getUser();
        $array = json_decode(json_encode($user), true);

        $data = [
            'title' => 'Data User',
            'users' => $array
        ];
        return view('data/user', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Manage User',
        ];
        return view('user/tambah', $data);
    }

    public function save()
    {
        $validation = \Config\Services::validation();

        //Rule validation
        $valid = $this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[user.username]|min_length[5]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah terdaftar',
                    'min_length' => '{field} minimal 5 karakter',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 5 karakter',
                ]
            ],
            'nama_lengkap' => [
                'label' => 'Nama Pengguna',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
        ]);
        //penerapan validation
        if (!$valid) {
            $sessError = [
                'errUsername' => $validation->getError('username'),
                'errPassword' => $validation->getError('password'),
                'errNama' => $validation->getError('nama_lengkap'),

            ];

            session()->setFlashdata($sessError);
            return redirect()->to('/user/tambah')->withInput();
        } else {
            $password = $this->request->getVar('password');

            $this->loginModel->save([
                'username' => $this->request->getVar('username'),
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'nama_alias' => $this->request->getVar('nama_alias'),
                'role' => $this->request->getVar('role'),
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]);
            session()->setFlashdata('pesan', 'ditambahkan!');
            return redirect()->to('/user');
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Manage User',
            'userss' => $this->loginModel->getLogin($id),
            'users' => $this->loginModel->getUserid($id),
        ];
        return view('user/edit', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();

        $userLama = $this->loginModel->getLogin($this->request->getVar('id'));
        if ($userLama['username'] == $this->request->getVar('username')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'is_unique[user.username]';
        }
        //Rule validation
        $valid = $this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => $rule_username,
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ]
        ]);
        //penerapan validation
        if (!$valid) {
            $sessError = [
                'errUsername' => $validation->getError('username'),

            ];

            session()->setFlashdata($sessError);
            return redirect()->to('/user/edit/' . $this->request->getVar('id'))->withInput();
        } else {
            $password = $this->request->getVar('password');
            $this->loginModel->save([
                'id' => $id,
                'username' => $this->request->getVar('username'),
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'nama_alias' => $this->request->getVar('nama_alias'),
                'role' => $this->request->getVar('role'),
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('pesan', 'Data berhasil diubah!');
            return redirect()->to('/user');
        }
    }

    public function delete($id)
    {
        $this->loginModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('/user');
    }
}
