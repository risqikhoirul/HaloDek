<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBlog extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'blog';
    protected $primaryKey       = 'id_Blog';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['artikel', 'title'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'artikel' => 'required|min_length[20]',
        'title' => 'required|min_length[10]',
    ];
    protected $validationMessages   = [
        'nama'	=> [
            'required'		=> 'Nama Harus di Isi',
            'max_length'	=> 'Nama Mainimal 20 Karakter'
    ],
        'title'	=> [
            'required'		=> 'Nama Harus di Isi',
            'min_length'	=> 'Nama Mainimal 20 Karakter'
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
