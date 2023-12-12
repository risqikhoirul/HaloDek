<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
use Config\Services;
use App\Models\ModelDataObat;

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
            
        $model = new ModelDataObat();
        $data = [
            'getObat' => $model->findAll(),
            'title'=> 'Dashboard',
        ];
        return view('dashboard/index', $data);
    }
}

