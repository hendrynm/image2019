<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('overview_model');
		$this->load->model('adminregistrasi_model');
		if($this->login_model->belumMasuk()) redirect(base_url('admin/login'));
	}

	public function index()
	{
		$data['pengguna'] = $this->overview_model->pengguna();
		$data['aktif'] = $this->adminregistrasi_model->aktif();

		$this->load->view('admin/registrasi',$data);
	}

	public function pasif($id)
	{
		$this->adminregistrasi_model->ubah_pasif($id);

		redirect(base_url('admin/registrasi'));
	}

	public function semua()
	{
		$data['pengguna'] = $this->overview_model->pengguna();
		$data['aktif'] = $this->adminregistrasi_model->semua();

		$this->load->view('admin/registrasi',$data);
	}

}
