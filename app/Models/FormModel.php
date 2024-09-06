<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table      = 'form';
    // protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'applicant_id', 'name', 'gender', 'phone_number', 'address'];

    public function getFormByApplicantId($id){        
        return $this->query("SELECT form.* FROM form
        INNER JOIN applicant ON form.applicant_id = applicant.id
        WHERE form.applicant_id = $id")->getRowArray();
    }
}