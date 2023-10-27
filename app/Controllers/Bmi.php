<?php

namespace App\Controllers;

class Bmi extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'=> 'Cek BMI',
        ];
        return view('bmi', $data);
    }
}
