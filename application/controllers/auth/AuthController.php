<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('auth/login');
        $this->load->view('templates/footer');
	}

    public function register()
    {
        $this->load->view('templates/header');
        $this->load->view('auth/register');
        $this->load->view('templates/footer');
    }
}
