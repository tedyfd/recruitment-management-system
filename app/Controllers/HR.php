<?php

namespace App\Controllers;

use App\Models\ApplicantModel;

class HR extends BaseController
{
    public function index()
    {
        $applicantModel = new ApplicantModel();
        
        $data = [
			'title' => 'user',
            'sidebar' => 3,
            'session' => \Config\Services::session(),
            'applicant' => $applicantModel->findAll()
		];
        return view('hr/index', $data);
    }

    public function addApplicant()
    {
        $applicantModel = new ApplicantModel();

        $name = $this->request->getVar('name');
        $username = $this->request->getVar('username');
        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        
        $data = [
            'name' => $name,
            'username' => $username,
            'password' => $password,
        ];
        if($applicantModel->Where(['username' => $username])->first()){
            $data = [
                'status' => true,
                'msg' => 'Duplicate username!'
            ];
            return json_encode($data);
        }else{
            if($applicantModel->insert($data)){
                $data = [
                    'status' => true,
                    'msg' => 'Applicant added successfully!'
                ];
            }else{
                $data = [
                    'status' => false,
                    'msg' => 'Sorry, Applicant not added.'				
                ];
            }
            return json_encode($data);
        }
    }

    public function delApplicant($id)
    {
        $applicantModel = new ApplicantModel();

        // $id = $this->request->getVar('id');
        $applicantModel->where('id', $id);
        if($applicantModel->delete()){
            $data = [
                'status' => true,
                'msg' => 'Applicant has been deleted!'
            ];
            return json_encode($data);
        }else{
            $data = [
                'status' => false,
                'msg' => 'Sorry, Applicant failed to delete!'				
            ];
            return json_encode($data);
        }
    }

    public function applicant($id)
    {
        $applicantModel = new ApplicantModel();
        
        $data = [
			'title' => 'user',
            'sidebar' => 3,
            'session' => \Config\Services::session(),
            'applicant' => $applicantModel->find($id)
		];
        
        return view('hr/applicantDetail', $data);
    }
}
