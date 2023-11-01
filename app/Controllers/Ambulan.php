<?php

namespace App\Controllers;

class Ambulan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'=> 'Layanan Ambulan',
        ];
        return view('ambulan', $data);
    }
}
