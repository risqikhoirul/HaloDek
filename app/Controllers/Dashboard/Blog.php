<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\ModelBlog;

class Blog extends BaseController
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
        
        $model = new ModelBlog();
        $data = [
            'getBlog' => $model->findAll(),
            'title' => 'Blog Media',
        ];
        return view('dashboard/blog', $data);
    }

    public function add()
    {
        $model = new ModelBlog();
    
        $dataBlog = [
            "title" => $this->request->getPost('title'),
            "artikel" => $this->request->getPost('artikel'),
        ];
    
        $model->transStart();
    
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);
    
        if (!$model->insert($dataBlog)) {
            $model->transRollback(); // Rollback transaksi jika terjadi kesalahan
            return redirect()->to("/dashboard/blog")->withInput()->with('errors', $model->errors());
        }
    
        $model->transComplete();
        return redirect()->to("/dashboard/blog")->with('success', 'Data added successfully.');
    }
    
    public function update()
    {
        $model = new ModelBlog();
    
        $id = ["id_Blog" => $this->request->getPost('id_Blog')];
        $dataBlog = [
            "title" => $this->request->getPost('title'),
            "artikel" => $this->request->getPost('artikel'),
        ];
    
        $model->transStart();
    
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);
    
        if (!$model->update($id['id_Blog'], $dataBlog)) {
            $model->transRollback(); // Rollback transaksi jika terjadi kesalahan
            return redirect()->to("/dashboard/blog")->witloghInput()->with('errors', $model->errors());
        }
    
        $model->transComplete();
        return redirect()->to("/dashboard/blog")->with('success', 'Data updated successfully.');
    }
    

    public function delete(int $id)
    {
        // Memulai transaksi
        $model = new ModelBlog();
        $model->transStart();

            // Hapus data
            if (!$model->delete($id)) {
                return redirect()->to("/dashboard/blog")->with('error', 'Delete failed.');
            }

            // Commit transaksi jika berhasil
            $model->transComplete();
            return redirect()->to("/dashboard/blog")->with('success', 'Data delete successfully.');

            // Tidak perlu redirect, bisa langsung render view atau response lainnya
    }
}
