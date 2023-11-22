<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;

class Index extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'=> 'Dashboard',
        ];
        return view('dashboard/index', $data);
    }
    public function dataPasien(): string
    {
        $data = [
            'title'=> 'Data Pasien',
        ];
        return view('dashboard/dataPasien', $data);
    }
}

