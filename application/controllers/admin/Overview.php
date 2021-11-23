<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('overview_model');
		if($this->login_model->belumMasuk()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data['pengguna'] = $this->overview_model->pengguna();

		$this->load->view('admin/overview',$data);
	}
}
