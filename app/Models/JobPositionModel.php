<?php

namespace App\Models;

use CodeIgniter\Model;

class JobPositionModel extends Model
{
    protected $table      = 'job_position';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','name', 'description'];
}