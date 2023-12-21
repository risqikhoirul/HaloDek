<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use Config\Services;
use App\Models\ModelUser;

class Setting extends BaseController
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
        
        $idUser = $this->session->id_user;
        $modelUser = new ModelUser();
        $data = [
            'getProfil' => $modelUser->find($idUser),
            'title' => 'Profil',
        ];
        return view('dashboard/setting', $data);
    }
    public function update()
    {
        $modelUser = new ModelUser();
        $user = $modelUser->where('username', $this->request->getPost('username'))->first();
        
        if (is_null($user) || !password_verify($this->request->getPost('passwordOld'), $user['password'])) {
            // Password lama tidak sesuai dengan password yang tersimpan
            return redirect()->to('/dashboard/setting')->withInput()->with('errors', 'Password Lama Salah');
        } else {
            // Password lama sesuai, lanjutkan dengan logika perubahan password

        
        $idUser = $this->session->id_user;
        $dataProfil = [
            "fristname" => $this->request->getPost('firstname'),
            "lastname" => $this->request->getPost('lastname'),
            "email" => $this->request->getPost('email'),
            "password" => $this->request->getPost('password')
        ];
    
        $modelUser->transStart();
    
        $getRule = $modelUser->getRule();
        $modelUser->setValidationRules($getRule);
    
        if (!$modelUser->update($idUser, $dataProfil)) {
            $modelUser->transRollback(); // Rollback transaksi jika terjadi kesalahan
            return redirect()->to("/dashboard/setting")->withInput()->with('errors', $modelUser->errors());
        }
    
        $modelUser->transComplete();
        return redirect()->to("/dashboard/setting")->with('success', 'Data updated successfully.');
    }
}
}
