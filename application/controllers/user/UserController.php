<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Si Pinjam';
        $this->load->view('templates/header', $data);
		$this->load->view('user/index');
        $this->load->view('templates/footer');
	}
}
