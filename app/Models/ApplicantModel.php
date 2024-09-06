<?php

namespace App\Models;

use CodeIgniter\Model;

class ApplicantModel extends Model
{
    protected $table      = 'applicant';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','username', 'password', 'name', 'job_id'];

    public function getUser($username, $password)
    {
        return $this->where(['username' => $username, 'password' => $password])->first();
    }
    public function getAllUser(){        
        return $this->get()->getResultArray();
    }
}