<?php

namespace App\Controllers;

use App\Models\Blog;

class BlogKesehatan extends BaseController
{
    public function index()
    {
        $model = new Blog();
        $data = [
            'posts' => $model->findAll(),
            'title' =>'Blog Page'
        ];

        // Lakukan sesuatu dengan data

        return view('blog', $data);
    }
}
