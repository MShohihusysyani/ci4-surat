<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $id = session()->get('id');
        $data = [
            'title' => 'Dashboard'
        ];
        return view('home', $data);
    }
}
