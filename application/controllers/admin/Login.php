<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if ($this->session->userdata('koderuang') !== null){
			redirect(base_url('admin/overview'));
		}
		else if($this->input->post()){
			if($this->login_model->masuk()){
				redirect(base_url('admin/overview'));
			}
		}

		$this->load->view("admin/user_login");
	}

	public function logout()
	{
		$this->session->unset_userdata('koderuang');
		redirect(base_url('admin/login'));
	}
}
