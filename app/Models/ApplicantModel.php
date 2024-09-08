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

    public function getApplicantBySelectionStatus($selectionStatusId, $organizationId = null)
    {
        if ($selectionStatusId && $organizationId){
            return $this->query("SELECT 
            a.*, ss.status, jc.name as job_category, jp.name as job_position, jo.name as job_organization
            FROM applicant a
            INNER JOIN selection s on a.id = s.applicant_id
            INNER JOIN selection_status ss on s.selection_status_id = ss.id
            INNER JOIN job j on a.job_id = j.id
            INNER JOIN job_category jc on j.job_category_id = jc.id
            INNER JOIN job_position jp on j.job_position_id = jp.id
            INNER JOIN job_organization jo on j.job_organization_id = jo.id
            WHERE s.created_at = (
                SELECT MAX(s2.created_at)  FROM selection s2
                WHERE s2.applicant_id = a.id
            ) 
            AND s.selection_status_id = $selectionStatusId AND j.job_organization_id = $organizationId
            ORDER BY s.created_at DESC")->getResultArray();
        }else{
            return $this->query("SELECT 
            a.*, ss.status, jc.name as job_category, jp.name as job_position, jo.name as job_organization
            FROM applicant a
            INNER JOIN selection s on a.id = s.applicant_id
            INNER JOIN selection_status ss on s.selection_status_id = ss.id
            INNER JOIN job j on a.job_id = j.id
            INNER JOIN job_category jc on j.job_category_id = jc.id
            INNER JOIN job_position jp on j.job_position_id = jp.id
            INNER JOIN job_organization jo on j.job_organization_id = jo.id
            WHERE s.created_at = (
                SELECT MAX(s2.created_at)  FROM selection s2
                WHERE s2.applicant_id = a.id
            ) 
            AND s.selection_status_id = $selectionStatusId
            ORDER BY s.created_at DESC")->getResultArray();
        }
    }
}