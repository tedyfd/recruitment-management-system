<?php

namespace App\Models;

use CodeIgniter\Model;

class HRModel extends Model
{
    protected $table      = 'hr';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','username', 'password', 'name'];


    public function getUser($username, $password)
    {
        return $this->where(['username' => $username, 'password' => $password])->first();
    }
}