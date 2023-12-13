<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDataPasien extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'dataPasien';
    protected $primaryKey       = 'id_Pasien';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'alamat', 'riwayat'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nama' => 'required|max_length[20]',
        'alamat' => 'required|max_length[50]',
        'riwayat' => 'required|max_length[20]',
    ];
    protected $validationMessages   = [
        'nama'	=> [
            'required'		=> 'Nama Harus di Isi',
            'max_length'	=> 'Nama Maximal 20 Karakter'
    ],
        'alamat'	=> [
            'required'		=> 'Jenis Harus di Isi',
            'max_length'	=> 'Jenis Maximal 50 Karakter'
],
        'riwayat'	=> [
            'required'		=> 'Jenis Harus di Isi',
            'max_length'	=> 'Jenis Maximal 20 Karakter'
],
];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    
// fungsi getRule validasi
    public function getRule()
    {
        return $this->validationRules;        
    }   
}
