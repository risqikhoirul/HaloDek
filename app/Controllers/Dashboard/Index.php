<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
use Config\Services;
use App\Models\ModelDataObat;
use App\Models\ModelDataPasien;

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
        $data = [
            'getObat' => $modelObat->findAll(),
            'getPasien' => $modelPasien->findAll(),
            'title'=> 'Dashboard',
        ];
        return view('dashboard/index', $data);
    }
}

