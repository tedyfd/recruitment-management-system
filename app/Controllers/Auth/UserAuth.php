<?php
namespace App\Controllers\Auth;

use App\Controllers\BaseController;

use App\Models\UserModel;

class UserAuth extends BaseController
{
    public function login()
    {
        helper(['form', 'url']);
        $data = [
            'validation' => \Config\Services::validation(),
            'session' => \Config\Services::session()
        ];
        return view('auth/UserLogin', $data);
    }
    public function loginProcess()
    {
        helper(['form', 'url']);
        $model = new UserModel();
        
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        } else {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $data = $model->Where(['username' => $username])->first();
            if ($data) {
                if(password_verify($password, $data['password'])){
                    $newdata = [
                        'username'  => $data['username'],
                        'user_logged_in' => TRUE
                    ];
                    
                    $this->session->set($newdata);
                    return redirect()->to('/user');
                }else{
                    $this->session->setFlashdata('message', 'Password is wrong!');
                    return redirect()->to('/auth/user/login');
                }
            } else {
                $this->session->setFlashdata('message', 'Username not found!');
                return redirect()->to('/auth/user/login');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('auth/user/login');
    }
}
