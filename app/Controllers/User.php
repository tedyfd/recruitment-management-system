<?php

namespace App\Controllers;

use App\Models\ApplicantModel;
use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $userModelModel = new UserModel();
        $applicantModel = new ApplicantModel();
        
        $user = $userModelModel->where(['username' => session('username')])->first();

        $data = [
			'title' => 'user',
            'sidebar' => 3,
            'session' => \Config\Services::session(),
            'applicant' => $applicantModel->getApplicantBySelectionStatus(5, $user['job_organization_id']),
		];
        return view('user/index', $data);
    }
}