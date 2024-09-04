<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table      = 'form';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','job_id', 'applicant_id', 'name', 'gender', 'phone_number', 'address'];
}