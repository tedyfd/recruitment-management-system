<?php

namespace App\Models;

use CodeIgniter\Model;

class JobCategoryModel extends Model
{
    protected $table      = 'job_category';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','name', 'description'];
}