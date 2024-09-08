<?php

namespace App\Controllers;

use App\Models\ApplicantModel;
use App\Models\JobModel;
use App\Models\JobOrganizationModel;
use App\Models\UserModel;
use App\Models\SelectionModel;
use App\Models\FormModel;

class User extends BaseController
{
    public function index()
    {
        $userModelModel = new UserModel();
        $jobOrganizationModel = new JobOrganizationModel();
        $applicantModel = new ApplicantModel();
        
        $user = $userModelModel->where(['username' => session('username')])->first();

        $data = [
			'title' => 'user',
            'sidebar' => 3,
            'session' => \Config\Services::session(),
            'jobOrganization' => $jobOrganizationModel->find($user['job_organization_id']),
            'applicant' => $applicantModel->getApplicantBySelectionStatus(5, $user['job_organization_id']),
		];
        return view('user/index', $data);
    }

    public function applicant($id)
    {
        $applicantModel = new ApplicantModel();
        $formModel = new FormModel();
        $selectionModel = new SelectionModel();
        $jobModel = new JobModel();

        $applicant = $applicantModel->find($id);
        $job = $jobModel->getAllJobById($applicant['job_id']);
        
        $data = [
			'title' => 'user',
            'sidebar' => 3,
            'session' => \Config\Services::session(),
            'applicant' => $applicant,
            'form' => $formModel->getFormByApplicantId($id),
            'selection' => $selectionModel->getAllSelectionByApplicantId($id),
            'selectionRow' => $selectionModel->getRowSelectionByApplicantId($id),
            'job' => $job,
		];
        
        return view('user/applicantDetail', $data);
    }

    public function addSelection()
    {
        $selectionModel = new SelectionModel();

        $applicantId = $this->request->getVar('applicantId');
        $selectionStatusId = $this->request->getVar('selectionStatusId');
        
        $data = [
            'applicant_id' => $applicantId,
            'selection_status_id' => $selectionStatusId,
            'created_at' => date('Y-m-d H:i:s'),
        ];
    
        if($selectionModel->insert($data)){
            $data = [
                'status' => true,
                'msg' => 'New selection added successfully!'
            ];
        }else{
            $data = [
                'status' => false,
                'msg' => 'Sorry, selection not added.'				
            ];
        }
        return json_encode($data);
        
    }
}