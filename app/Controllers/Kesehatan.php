<?php

namespace App\Controllers;

class Kesehatan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'=> 'Layanan Seputar Kesehatan',
        ];
        return view('kesehatan', $data);
    }
}
