<?php

namespace App\Controllers;

class Ambulan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'=> 'Ambulan',
        ];
        return view('ambulan', $data);
    }
}
