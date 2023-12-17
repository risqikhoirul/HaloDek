<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\ModelDataObat;
use App\Models\ModelUser;

class DataObat extends BaseController
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
        
        $model = new ModelDataObat();
        $modelUser = new ModelUser();
        $data = [
            'getObat' => $model->findAll(),
            'getPegawai' => $modelUser->findAll(),
            'getPegawais' => $modelUser->findAll(),
            'usr' => $this->session->username,
            'title' => 'Data Obat',
        ];
        return view('dashboard/dataObat', $data);
    }

    public function add()
    {
        $model = new ModelDataObat();
    
        $dataObat = [
            "nama" => $this->request->getPost('nama'),
            "jumlah" => $this->request->getPost('jumlah'),
            "jenis" => $this->request->getPost('jenis'),
        ];
    
        $model->transStart();
    
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);
    
        if (!$model->insert($dataObat)) {
            $model->transRollback(); // Rollback transaksi jika terjadi kesalahan
            return redirect()->to("/dashboard/dataObat")->withInput()->with('errors', $model->errors());
        }
    
        $model->transComplete();
        return redirect()->to("/dashboard/dataObat")->with('success', 'Data added successfully.');
    }
    
    public function update()
    {
        $model = new ModelDataObat();
    
        $id = ["id_Obat" => $this->request->getPost('id_Obat')];
        $dataObat = [
            "nama" => $this->request->getPost('nama'),
            "jumlah" => $this->request->getPost('jumlah'),
            "jenis" => $this->request->getPost('jenis'),
        ];
    
        $model->transStart();
    
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);
    
        if (!$model->update($id['id_Obat'], $dataObat)) {
            $model->transRollback(); // Rollback transaksi jika terjadi kesalahan
            return redirect()->to("/dashboard/dataObat")->withInput()->with('errors', $model->errors());
        }
    
        $model->transComplete();
        return redirect()->to("/dashboard/dataObat")->with('success', 'Data updated successfully.');
    }
    

    public function delete(int $id)
    {
        // Memulai transaksi
        $model = new ModelDataObat();
        $model->transStart();

            // Hapus data
            if (!$model->delete($id)) {
                return redirect()->to("/dashboard/dataObat")->with('error', 'Delete failed.');
            }

            // Commit transaksi jika berhasil
            $model->transComplete();
            return redirect()->to("/dashboard/dataObat")->with('success', 'Data delete successfully.');

            // Tidak perlu redirect, bisa langsung render view atau response lainnya
    }
}
