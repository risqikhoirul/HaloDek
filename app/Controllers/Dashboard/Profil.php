<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\ModelUser;

class Profil extends BaseController
{
    protected $session;
    public function __construct()
    {
        // start session
        $this->session = Services::session();
    }
    public function index()
    {
        if (!$this->session->isLoggedIn) {
            return redirect()->to('/auth/login');
        }
        
        $idUser = $this->session->id_user;
        $modelUser = new ModelUser();
        $data = [
            'getProfil' => $modelUser->find($idUser),
            'title' => 'Profil',
        ];
        return view('dashboard/profil', $data);
    }
}
