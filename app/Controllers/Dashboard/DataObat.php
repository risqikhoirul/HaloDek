<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\ModelDataObat;

class DataObat extends BaseController
{
    public function index()
    {
        $model = new ModelDataObat();
        $data = [
            'getObat' => $model->findAll(),
            'title' => 'Data Obat',
        ];
        return view('dashboard/dataObat', $data);
    }

    public function add()
    {
        // Tangkap data dari form
        $dataObat = [
            "nama" => $this->request->getPost('nama'),
            "status" => $this->request->getPost('status'),
            "jenis" => $this->request->getPost('jenis'),
        ];

        // Memulai transaksi
        $model = new ModelDataObat();
        $model->transStart();

        // Set aturan validasi
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);

            // Validasi berhasil, insert data
            if (!$model->insert($dataObat)) {
                return redirect()->to("/dashboard/dataObat")->withInput()->with('errors', $model->errors());
            }

            // Commit transaksi jika berhasil
            $model->transComplete();
            return redirect()->to("/dashboard/dataObat");
    }

    public function update()
    {

        // Memulai transaksi
        $model = new ModelDataObat();
        $model->transStart();

                // Tangkap data dari form
        $id = [
            "id_Obat" => $this->request->getPost('id_Obat'),
        ];
        $dataObat = [
            "namaUp" => $this->request->getPost('nama'),
            "status" => $this->request->getPost('status'),
            "jenis" => $this->request->getPost('jenis'),
        ];
        


        // Set aturan validasi
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);

       
            // Validasi berhasil, update data
            if (!$model->update($id[0], $dataObat)) {
                return redirect()->to("/dashboard/dataObat")->withInput()->with('errors', $model->errors());
            }

            // Commit transaksi jika berhasil
            $model->transComplete();
            return redirect()->to("/dashboard/dataObat");

            // Tidak perlu redirect, bisa langsung render view atau response lainnya

      
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
            return redirect()->to("/dashboard/dataObat");

            // Tidak perlu redirect, bisa langsung render view atau response lainnya
    }
}
