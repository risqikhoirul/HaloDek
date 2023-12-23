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
        // Fungsi untuk membatasi jumlah kata
    private function limitWords($text, $limit) {
        $words = explode(' ', $text);
        return implode(' ', array_slice($words, 0, $limit));
    }
    public function index()
    {
        if (!$this->session->isLoggedIn) {
            return redirect()->to('/auth/login');
        }
        
        $model = new ModelMedia();
        $data = [
            'getMedia' => $model->findAll(),
            'getThumail' => $model->findAll(),
            'usr' => $this->session->username,
            'title' => 'Media',
        ];
        $columnName = 'content'; // Gantilah dengan nama kolom teks yang diinginkan

        // Tentukan batasan jumlah kata (limit)
        $wordLimit = 20; // Ganti 20 dengan jumlah kata yang diinginkan


        // Proses setiap baris untuk membatasi jumlah kata
        foreach ($data['getThumail'] as &$record) {
            $record[$columnName] = $this->limitWords($record[$columnName], $wordLimit);
        }
        return view('dashboard/media/mediaLihat', $data);
    }
    public function indexAll()
    {
        
        $model = new ModelMedia();
        $data = [
            'getThumail' => $model->findAll(),
            'usr' => $this->session->username,
            'title' => 'Media',
        ];
        $columnName = 'content'; // Gantilah dengan nama kolom teks yang diinginkan

        // Tentukan batasan jumlah kata (limit)
        $wordLimit = 20; // Ganti 20 dengan jumlah kata yang diinginkan


        // Proses setiap baris untuk membatasi jumlah kata
        foreach ($data['getThumail'] as &$record) {
            $record[$columnName] = $this->limitWords($record[$columnName], $wordLimit);
        }
        return view('media', $data);
    }
    public function indexFind(int $id)
    {
        
        $model = new ModelMedia();
        $data = [
            'getMedia' => $model->find($id),
            'usr' => $this->session->username,
            'title' => 'Media',
        ];

        return view('viewMedia', $data);
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
            'getMedia' => $model->find($idMedia),
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
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    
        $model->transComplete();
        return redirect()->back()->with('success', 'Data updated successfully.');
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
