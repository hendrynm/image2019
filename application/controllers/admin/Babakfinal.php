<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Babakfinal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('overview_model');
		$this->load->model('final_model');
		if($this->login_model->belumMasuk()) redirect(base_url('admin/login'));
	}

	public function index()
	{
		$data['pengguna'] = $this->overview_model->pengguna();
		$data['menang_A'] = $this->final_model->menang_A();
		$data['menang_B'] = $this->final_model->menang_B();

		$this->load->view('admin/awal_final',$data);
	}

	public function kode($id)
	{
		$data['pengguna'] = $this->overview_model->pengguna();
		$data['game'] = $this->final_model->game(base64_decode($id));

		$this->load->view('admin/final',$data);
	}

	public function kirim($id)
	{
		$this->final_model->kirim(base64_decode($id));

		redirect(base_url('admin/babakfinal/kode/').$id);
	}

	public function cek($id,$kode)
	{
		$this->final_model->cek(base64_decode($id),$kode);

		redirect(base_url('admin/babakfinal/kode/').$id);
	}


}
