<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }
    protected $loginModel;
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
}
