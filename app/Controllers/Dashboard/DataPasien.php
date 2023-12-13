<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\ModelDataPasien;

class DataPasien extends BaseController
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
        
        $model = new ModelDataPasien();
        $data = [
            'getPasiens' => $model->findAll(),
            'title' => 'Data Pasien',
        ];
        return view('dashboard/dataPasien', $data);
    }

    public function add()
    {
        $model = new ModelDataPasien();
    
        $dataPasien = [
            "nama" => $this->request->getPost('nama'),
            "alamat" => $this->request->getPost('alamat'),
            "riwayat" => $this->request->getPost('riwayat'),
        ];
    
        $model->transStart();
    
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);
    
        if (!$model->insert($dataPasien)) {
            $model->transRollback(); // Rollback transaksi jika terjadi kesalahan
            return redirect()->to("/dashboard/dataPasien")->withInput()->with('errors', $model->errors());
        }
    
        $model->transComplete();
        return redirect()->to("/dashboard/dataPasien")->with('success', 'Data added successfully.');
    }
    
    public function update()
    {
        $model = new ModelDataPasien();
    
        $id = ["id_Pasien" => $this->request->getPost('id_Pasien')];
        $dataPasien = [
            "nama" => $this->request->getPost('nama'),
            "alamat" => $this->request->getPost('alamat'),
            "riwayat" => $this->request->getPost('riwayat'),
        ];
    
        $model->transStart();
    
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);
    
        if (!$model->update($id['id_Pasien'], $dataPasien)) {
            $model->transRollback(); // Rollback transaksi jika terjadi kesalahan
            return redirect()->to("/dashboard/dataPasien")->withInput()->with('errors', $model->errors());
        }
    
        $model->transComplete();
        return redirect()->to("/dashboard/dataPasien")->with('success', 'Data updated successfully.');
    }
    

    public function delete(int $id)
    {
        // Memulai transaksi
        $model = new ModelDataPasien();
        $model->transStart();

            // Hapus data
            if (!$model->delete($id)) {
                return redirect()->to("/dashboard/dataPasien")->with('error', 'Delete failed.');
            }

            // Commit transaksi jika berhasil
            $model->transComplete();
            return redirect()->to("/dashboard/dataPasien")->with('success', 'Data delete successfully.');

            // Tidak perlu redirect, bisa langsung render view atau response lainnya
    }
}
