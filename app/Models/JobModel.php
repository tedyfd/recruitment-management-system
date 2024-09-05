<?php

namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
    protected $table      = 'job';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','name', 'job_category_id', 'job_position_id', 'job_organization_id'];
}