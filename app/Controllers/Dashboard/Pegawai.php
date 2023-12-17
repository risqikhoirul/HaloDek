<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\ModelUser;

class Pegawai extends BaseController
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

        $model = new ModelUser();
        $level = $model->findAll();
        $usr = $this->session->username;
        $isLevel = false;

foreach ($level as $pegawai) {
    // Mengecek apakah username dan level cocok
    if ($pegawai['username'] == $usr && $pegawai['level'] == 'pegawai') {
        // Jika cocok, menyimpan data pegawai yang ditemukan
        $isLevel = true;
        // Keluar dari loop karena sudah ditemukan
        break;
    }
}
        if($isLevel){
            return redirect()->to('/dashboard');
        }
        
        $data = [
            'usr' => $usr,
            'getPegawai' => $model->where('level !=', 'admin')->findAll(),
            'getPegawais' => $model->findAll(),
            'title' => 'Data Pegawai',
        ];
        return view('/dashboard/pegawai', $data);
    }
    public function tambah()
    {
        $model = new ModelUser();
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);
        
        $dataPegawai = [
            'firstname'         => $this->request->getPost('firstname'),
            'lastname'          => $this->request->getPost('lastname'),
            'email'          => $this->request->getPost('email'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'password_confirm'  => $this->request->getPost('password_confirm'),
            'level'  => 'pegawai'
        ];

        if (!$model->insert($dataPegawai)) {
            return redirect()->to("/dashboard/pegawai")->withInput()->with('errors', $model->errors());
        }

        return redirect()->to("/dashboard/pegawai")->with('success', 'Sukses Menambah Data Pegawai');
    }
    public function ubah()
    {
        $model = new ModelUser();
        $getRule = $model->getRule();
        $model->setValidationRules($getRule);
        $dataPegawai = [
            'firstname'         => $this->request->getPost('firstname'),
            'lastname'          => $this->request->getPost('lastname'),
            'email'          => $this->request->getPost('email'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'password_confirm'  => $this->request->getPost('password_confirm'),
        ];

        if (!$model->update($id, $dataPegawai)) {
            return redirect()->to("/dashboard/pegawai")->withInput()->with('errors', $model->errors());
        }
        return redirect()->to("/dashboard/pegawai")->with('success', 'Sukses Mengubah Data Pegawai');
    }
    public function hapus(int $id)
    {
        $model = new ModelUser();
        $model->transStart();

            // Hapus data
            if (!$model->delete($id)) {
                return redirect()->to("/dashboard/pegawai")->with('error', 'Delete failed.');
            }

            // Commit transaksi jika berhasil
            $model->transComplete();
            return redirect()->to("/dashboard/pegawai")->with('success', 'Sukses Menghapus Data Pegawai');
    }

}