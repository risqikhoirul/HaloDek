<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMedia extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'media';
    protected $primaryKey       = 'id_Media';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'author', 'content'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'title' => 'required|min_length[5]',
        'content' => 'required|min_length[10]',
    ];
    protected $validationMessages   = [
        'title'	=> [
            'required'		=> 'Judul Harus di Isi',
            'max_length'	=> 'Judul Minimall 5 Karakter'
    ],
        'content'	=> [
            'required'		=> 'Content Harus di Isi',
            'max_length'	=> 'Content Minimal 10 Karakter'
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
