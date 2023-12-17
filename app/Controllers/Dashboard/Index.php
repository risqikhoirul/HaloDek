<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
use Config\Services;
use App\Models\ModelDataObat;
use App\Models\ModelDataPasien;
use App\Models\ModelUser;

class Index extends BaseController
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
            
        $modelObat = new ModelDataObat();
        $modelPasien = new ModelDataPasien();
        $modelUser = new ModelUser();
        $data = [
            'getObat' => $modelObat->findAll(),
            'getPasien' => $modelPasien->findAll(),
            'getPegawai' => $modelUser->findAll(),
            'totalPegawaiCount' => count($modelUser->where('level !=', 'admin')->findAll()),
            'usr' => $this->session->username,
            'title'=> 'Dashboard',
        ];
        return view('dashboard/index', $data);
    }
}

