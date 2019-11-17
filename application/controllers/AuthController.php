<?php
class AuthController extends CI_Controller
{
    public function login()
    {
        $data['title'] = 'Login - Ritment';
        $this->load->view('auth/login', $data);
    }

    public function register()
    {
        $data['title'] = 'Register - Ritment';
        $this->load->view('auth/register', $data);
    }
}
