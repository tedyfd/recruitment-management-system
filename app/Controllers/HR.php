<?php

namespace App\Controllers;

use App\Models\ApplicantModel;
use App\Models\JobCategoryModel;
use App\Models\JobPositionModel;
use App\Models\JobOrganizationModel;
use App\Models\JobModel;

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

    public function jobSetting(){
        $jobCategoryModel = new JobCategoryModel();
        $jobPositionModel = new JobPositionModel();
        $jobOrganizationModel = new JobOrganizationModel();
        $jobModel = new JobModel();
        
        $data = [
			'title' => 'user',
            'sidebar' => 3,
            'session' => \Config\Services::session(),
            'jobCategory' => $jobCategoryModel->findAll(),
            'jobPosition' => $jobPositionModel->findAll(),
            'jobOrganization' => $jobOrganizationModel->findAll(),
            'job' => $jobModel->findAll(),
		];
        return view('hr/jobSetting', $data);
    }

    public function addJob()
    {
        $jobModel = new JobModel();

        $name = $this->request->getVar('jobName');
        $jobCategory = $this->request->getVar('jobCategory');
        $jobPosition = $this->request->getVar('jobPosition');
        $jobOrganization = $this->request->getVar('jobOrganization');
        
        $data = [
            'name' => $name,
            'job_category_id' => $jobCategory,
            'job_position_id' => $jobPosition,
            'job_organization_id' => $jobOrganization,
        ];
        if($jobModel->Where(['name' => $name])->first()){
            $data = [
                'status' => true,
                'msg' => 'Duplicate Job name!'
            ];
            return json_encode($data);
        }else{
            if($jobModel->insert($data)){
                $data = [
                    'status' => true,
                    'msg' => 'Job added successfully!'
                ];
            }else{
                $data = [
                    'status' => false,
                    'msg' => 'Sorry, Job not added.'				
                ];
            }
            return json_encode($data);
        }
    }

    public function addJobCategory()
    {
        $jobCategoryModel = new JobCategoryModel();

        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');
        
        $data = [
            'name' => $name,
            'description' => $description,
        ];
        if($jobCategoryModel->Where(['name' => $name])->first()){
            $data = [
                'status' => true,
                'msg' => 'Duplicate category name!'
            ];
            return json_encode($data);
        }else{
            if($jobCategoryModel->insert($data)){
                $data = [
                    'status' => true,
                    'msg' => 'Job Category added successfully!'
                ];
            }else{
                $data = [
                    'status' => false,
                    'msg' => 'Sorry, Job Category not added.'				
                ];
            }
            return json_encode($data);
        }
    }
    
    public function addJobPosition()
    {
        $jobPositionModel = new JobPositionModel();

        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');
        
        $data = [
            'name' => $name,
            'description' => $description,
        ];
        if($jobPositionModel->Where(['name' => $name])->first()){
            $data = [
                'status' => true,
                'msg' => 'Duplicate Position name!'
            ];
            return json_encode($data);
        }else{
            if($jobPositionModel->insert($data)){
                $data = [
                    'status' => true,
                    'msg' => 'Job Position added successfully!'
                ];
            }else{
                $data = [
                    'status' => false,
                    'msg' => 'Sorry, Job Position not added.'				
                ];
            }
            return json_encode($data);
        }
    }

    public function addJobOrganization()
    {
        $jobOrganizationModel = new JobOrganizationModel();

        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');
        
        $data = [
            'name' => $name,
            'description' => $description,
        ];
        if($jobOrganizationModel->Where(['name' => $name])->first()){
            $data = [
                'status' => true,
                'msg' => 'Duplicate Organization name!'
            ];
            return json_encode($data);
        }else{
            if($jobOrganizationModel->insert($data)){
                $data = [
                    'status' => true,
                    'msg' => 'Job Organization added successfully!'
                ];
            }else{
                $data = [
                    'status' => false,
                    'msg' => 'Sorry, Job Organization not added.'				
                ];
            }
            return json_encode($data);
        }
    }


}
