<?php
class AuthController extends CI_Controller
{
    public function login()
    {
        $data['title'] = 'Login - Ritment';
        $this->load->view('login', $data);
    }
}