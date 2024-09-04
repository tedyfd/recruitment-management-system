<?php

namespace App\Controllers;

use App\Models\ApplicantModel;
use App\Models\FormModel;

class Applicant extends BaseController
{
    public function index()
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

        $applicantId = $this->request->getVar('applicantId');
        $name = $this->request->getVar('name');
        $gender = $this->request->getVar('gender');
        $phone = $this->request->getVar('phone');
        $address = $this->request->getVar('address');
        
        $data = [
            'applicant_id' => $applicantId,
            'name' => $name,
            'gender' => $gender,
            'phone' => $phone,
            'address' => $address,
        ];

        if($formModel->insert($data)){
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