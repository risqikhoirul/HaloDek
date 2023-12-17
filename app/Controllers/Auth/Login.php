<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\ModelUser;

class Login extends BaseController
{
    protected $session;
    public function __construct()
    {
        // start session
        $this->session = Services::session();
    }

    public function index()
    {
        if ($this->session->isLoggedIn) {
            return redirect()->to('/dashboard');
        }
        return view('/auth/login');
    }

    public function login()
    {
        $rules = [
            'username'  => 'required|min_length[5]',
            'password'  => 'required|min_length[5]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->to('/auth/login')->withInput()->with('errors', $this->validator->getErrors());
        }

        $users = new ModelUser();        
        $user = $users->where('username', $this->request->getPost('username'))->first();
        
        if ( is_null($user) || ! password_verify($this->request->getPost('password'), $user['password']) ) 
        {
            return redirect()->to('/auth/login')->withInput()->with('error', 'Username atau Password Salah');
        }
        
        $this->session->set('isLoggedIn', true);
        $this->session->set('username', $user['username']);
        
        return redirect()->to('dashboard');
    }

    public function logout()
    {
        $this->session->remove(['isLoggedIn', 'userData']);
        return redirect()->to('/auth/login');
    }
}