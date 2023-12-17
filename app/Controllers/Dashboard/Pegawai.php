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
        
        $data = [
            'usr' => $this->session->username,
            'getPegawai' => $model->findAll(),
            'title' => 'Data Pegawai',
        ];
        return view('/dashboard/pegawai', $data);
    }
    public function tambah()
    {
        $user = new ModelUser();
        $getRule = $user->getRule();
        $user->setValidationRules($getRule);
        
        $dataPegawai = [
            'firstname'         => $this->request->getPost('firstname'),
            'lastname'          => $this->request->getPost('lastname'),
            'email'          => $this->request->getPost('email'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'password_confirm'  => $this->request->getPost('password_confirm'),
            'level'  => 'pegawai'
        ];

        if (!$user->insert($dataPegawai)) {
            return redirect()->to("/dashboard/pegawai")->withInput()->with('errors', $user->errors());
        }

        return redirect()->to("/dashboard/pegawai")->with('success', 'Sukses Menambah Data Pegawai');
    }
    public function ubah()
    {
        $user = new ModelUser();
        $getRule = $user->getRule();
        $user->setValidationRules($getRule);
        $dataPegawai = [
            'firstname'         => $this->request->getPost('firstname'),
            'lastname'          => $this->request->getPost('lastname'),
            'email'          => $this->request->getPost('email'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'password_confirm'  => $this->request->getPost('password_confirm'),
        ];

        if (!$user->update($id, $dataPegawai)) {
            return redirect()->to("/dashboard/pegawai")->withInput()->with('errors', $user->errors());
        }
        return redirect()->to("/dashboard/pegawai")->with('success', 'Sukses Mengubah Data Pegawai');
    }
    public function delete(int $id)
    {
        $user = new ModelUser();
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