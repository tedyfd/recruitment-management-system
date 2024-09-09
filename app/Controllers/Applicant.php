<?php

namespace App\Controllers;

use App\Models\ApplicantModel;
use App\Models\FormModel;
use App\Models\SelectionModel;

class Applicant extends BaseController
{
    public function index()
    {
        $applicantModel = new ApplicantModel();
        $formModel = new FormModel();
        $selectionModel = new SelectionModel();

        $applicant = $applicantModel->where(['username' => session('username')])->first();
        $form = $formModel->where(['applicant_id' => $applicant['id']])->first();
        
        $data = [
			'title' => 'user',
            'session' => \Config\Services::session(),
            'applicant' => $applicant,
            'form' =>  $form,
            'selection' => $selectionModel->getAllSelectionByApplicantId($applicant['id']),
		];
        return view('applicant/index', $data);
    }
    
    public function form()
    {
        $applicantModel = new ApplicantModel();
        $formModel = new FormModel();

        $applicant = $applicantModel->where(['username' => session('username')])->first();
        $form = $formModel->where(['applicant_id' => $applicant['id']])->first();
        
        $data = [
			'title' => 'user',
            'session' => \Config\Services::session(),
            'applicant' => $applicant,
            'form' =>  $form,
		];
        return view('applicant/form', $data);
    }

    public function addForm()
    {
        $applicantModel = new ApplicantModel();
        $formModel = new FormModel();
        $selectionModel = new SelectionModel();

        $applicantId = $this->request->getVar('applicantId');
        $name = $this->request->getVar('name');
        $gender = $this->request->getVar('gender');
        $phone = $this->request->getVar('phone');
        $address = $this->request->getVar('address');
        
        $data = [
            'applicant_id' => $applicantId,
            'name' => $name,
            'gender' => $gender,
            'phone_number' => $phone,
            'address' => $address,
        ];

        if($formModel->insert($data)){
            $dataSelection = [
                'applicant_id' => $applicantId,
                'selection_status_id' => 4,
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $selectionModel->insert($dataSelection);
            $data = [
                'status' => true,
                'msg' => 'Form added successfully!'
            ];
        }else{
            $data = [
                'status' => false,
                'msg' => 'Sorry, Form not added.'				
            ];
        }
        return json_encode($data);
    }
}