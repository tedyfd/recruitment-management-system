<?php

namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
    protected $table      = 'job';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','name', 'job_category_id', 'job_position_id', 'job_organization_id'];
    
    public function getAllJobs(){        
        return $this->query("SELECT job.*, job_category.name AS category_name, job_position.name AS position_name, job_organization.name AS organization_name FROM job
        INNER JOIN job_category ON job.job_category_id = job_category.id
        INNER JOIN job_position ON job.job_position_id = job_position.id
        INNER JOIN job_organization ON job.job_organization_id = job_organization.id")->getResultArray();
    }

    public function getAllJobById($id){        
        return $this->query("SELECT job.*, job_category.name AS category_name, job_position.name AS position_name, job_organization.name AS organization_name FROM job
        INNER JOIN job_category ON job.job_category_id = job_category.id
        INNER JOIN job_position ON job.job_position_id = job_position.id
        INNER JOIN job_organization ON job.job_organization_id = job_organization.id
        WHERE job.id = $id")->getResultArray();
    }
}