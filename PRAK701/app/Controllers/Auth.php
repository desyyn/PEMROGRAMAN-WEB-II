<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController {
    public function index() {
        return view('auth/login');
    }

    public function login() {
    $userModel = new UserModel();
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $user = $userModel->where('username', $username)->first();
    
    if ($user && password_verify($password, $user['password'])) {
        session()->set('logged_in', true);
        return redirect()->to('/buku');
    } else {
        return redirect()->back()->with('error', 'Login gagal!');
    }
}

    public function __construct() {
    helper(['form', 'url', 'session']);
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
}