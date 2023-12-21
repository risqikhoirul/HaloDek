<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\ModelMedia;
use App\Models\ModelUser;

class Media extends BaseController
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
        
        $model = new ModelMedia();
        $data = [
            'getMedia' => $model->findAll(),
            'usr' => $this->session->username,
            'title' => 'Media',
        ];
        return view('dashboard/media', $data);
    }
    public function tambah()
    {
        if (!$this->session->isLoggedIn) {
            return redirect()->to('/auth/login');
        }
        
        $model = new ModelMedia();
        $data = [
            'getMedia' => $model->findAll(),
            'usr' => $this->session->username,
            'title' => 'Tambah Content',
        ];
        return view('dashboard/media/mediaTambah', $data);
    }

    public function add()
    {
        $model = new ModelMedia();
    
        $dataMedia = [
            "title" => $this->request->getPost('title'),
            "author" => $this->session->username,
            "content" => $this->request->getPost('content'),
        ];
    
        $model->transStart();
    
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);
    
        if (!$model->insert($dataMedia)) {
            $model->transRollback(); // Rollback transaksi jika terjadi kesalahan
            return redirect()->to("/dashboard/mediakesehatan/tambah")->withInput()->with('errors', $model->errors());
        }
    
        $model->transComplete();
        return redirect()->to("/dashboard/mediakesehatan/tambah")->with('success', 'Data added successfully.');
    }

    public function ubah(int $idMedia)
    {
        if (!$this->session->isLoggedIn) {
            return redirect()->to('/auth/login');
        }
        
        $model = new ModelMedia();
        $data = [
            'getMedia' => $model->findAll(),
            'idMedia' => $idMedia,
            'usr' => $this->session->username,
            'title' => 'Ubah Content',
        ];
        return view('dashboard/media/mediaUbah', $data);
    }
    
    
    public function update()
    {
        $model = new ModelMedia();

        $id = [
        "idMedia" => $this->request->getPost('idMedia'),
        ];

        $dataMedia = [
            "title" => $this->request->getPost('title'),
            "author" => $this->session->username,
            "content" => $this->request->getPost('content'),
        ];
    
        $model->transStart();
    
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);
    
        if (!$model->update($id['idMedia'], $dataMedia)) {
            $model->transRollback(); // Rollback transaksi jika terjadi kesalahan
            return redirect()->to("/dashboard/mediakesehatan/ubah")->withInput()->with('errors', $model->errors());
        }
    
        $model->transComplete();
        return redirect()->to("/dashboard/mediakesehatan/ubah")->with('success', 'Data updated successfully.');
    }
    

    public function delete(int $id)
    {
        // Memulai transaksi
        $model = new ModelMedia();
        $model->transStart();

            // Hapus data
            if (!$model->delete($id)) {
                return redirect()->to("/dashboard/mediakesehatan")->with('error', 'Delete failed.');
            }

            // Commit transaksi jika berhasil
            $model->transComplete();
            return redirect()->to("/dashboard/mediakesehatan")->with('success', 'Data delete successfully.');

            // Tidak perlu redirect, bisa langsung render view atau response lainnya
    }
}
