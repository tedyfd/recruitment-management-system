<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class HRFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // if hr not logged in
        if (!session()->get('hr_logged_in')) {
            // then redirct to login page
            session()->destroy();
            return redirect()->to('/auth/hr/login');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}