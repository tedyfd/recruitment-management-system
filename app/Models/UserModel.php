<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','username', 'password', 'name', 'job_organization_id'];
}