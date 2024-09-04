<?php
namespace App\Controllers\Auth;

use App\Controllers\BaseController;

use App\Models\ApplicantModel;

class ApplicantAuth extends BaseController
{
    public function login()
    {
        helper(['form', 'url']);
        $data = [
            'validation' => \Config\Services::validation(),
            'session' => \Config\Services::session()
        ];
        return view('auth/ApplicantLogin', $data);
    }
    public function loginProcess()
    {
        helper(['form', 'url']);
        $applicantModel = new ApplicantModel();
        
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        } else {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $data = $applicantModel->where(['username' => $username])->first();
            if ($data) {
                if(password_verify($password, $data['password'])){
                    $newdata = [
                        'username'  => $data['username'],
                        'applicant_logged_in' => TRUE
                    ];
                    
                    $this->session->set($newdata);
                    return redirect()->to('/applicant');
                }else{
                    $this->session->setFlashdata('message', 'Password is wrong!');
                    return redirect()->to('/auth/applicant/login');
                }
            } else {
                $this->session->setFlashdata('message', 'Username not found!');
                return redirect()->to('/auth/applicant/login');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('auth/applicant/login');
    }
}
