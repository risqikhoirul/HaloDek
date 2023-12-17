<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['firstname', 'lastname', 'username', 'email', 'password', 'level'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $validationRules      = [
        'firstname' => 'required|min_length[3]',
        'lastname'  => 'required|min_length[3]',
        'username'  => 'required|min_length[5]|is_unique[tb_user.username,id_user]',
        'email'  => 'required|min_length[3]',
        'password'  => 'required|min_length[5]'
    ];

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    public function getData()
    {
        $users = new ModelUser();
        $datausers = $users->findAll();
        
        return $datausers;
    }

    public function getRule()
    {
        return $this->validationRules;        
    }    

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) return $data;
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }
    
}
