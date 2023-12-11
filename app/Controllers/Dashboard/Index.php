<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
use App\Models\ModelDataObat;

class Index extends BaseController
{
    public function index(): string
    {
        $model = new ModelDataObat();
        $data = [
            'getObat' => $model->findAll(),
            'title'=> 'Dashboard',
        ];
        return view('dashboard/index', $data);
    }
}

