<?php

namespace App\Models;

use CodeIgniter\Model;

class SelectionModel extends Model
{
    protected $table      = 'selection';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','applicant_id', 'selection_status_id', 'created_at'];

    public function getAllSelections(){        
        return $this->query("SELECT selection.*, selection_status.selection, selection_status.description, selection_status.icon, selection_status.color FROM selection
        INNER JOIN selection_status ON selection.selection_status_id = selection_status.id")->getResultArray();
    }

    public function getAllSelectionByApplicantId($id){        
        return $this->query("SELECT selection.*, selection_status.status, selection_status.description, selection_status.icon, selection_status.color FROM selection
        INNER JOIN selection_status ON selection.selection_status_id = selection_status.id
        WHERE selection.applicant_id = $id 
        ORDER BY selection.created_at DESC")->getResultArray();
    }
    public function getRowSelectionByApplicantId($id){        
        return $this->query("SELECT selection.*, selection_status.status, selection_status.description, selection_status.icon, selection_status.color FROM selection
        INNER JOIN selection_status ON selection.selection_status_id = selection_status.id
        WHERE selection.applicant_id = $id 
        ORDER BY selection.created_at DESC")->getRowArray();
    }
}