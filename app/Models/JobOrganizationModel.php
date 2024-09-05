<?php

namespace App\Models;

use CodeIgniter\Model;

class JobOrganizationModel extends Model
{
    protected $table      = 'job_organization';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','name', 'description'];
}