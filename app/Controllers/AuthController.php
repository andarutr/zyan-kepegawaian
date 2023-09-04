<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Login';
        return view('pages/auth/login', $data);
    }
}
