<?php

namespace App\Controllers;

class Carirs extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'=> 'Cari Rumah Sakit Terdekat',
        ];
        return view('carirs', $data);
    }
}
