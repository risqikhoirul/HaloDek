<?php

namespace App\Controllers;
use App\Models\Blog;

class Kesehatan extends BaseController
{
    public function index()
    {
        $model = new Blog();
        $data = [
            'posts' => $model->findAll(),
            'title' =>'Layanan Seputar Kesehatan'
        ];

        // Lakukan sesuatu dengan data

        return view('kesehatan', $data);
    }
}
