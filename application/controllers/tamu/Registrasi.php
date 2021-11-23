<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('registrasi_model');
		$this->load->model('angket_model');
	}

	public function index()
	{
		$this->load->view('tamu/registrasi');
	}

	public function hadir()
	{
		if($this->registrasi_model->cek_data()){
			if($this->registrasi_model->cek_duplikat()){
				$this->registrasi_model->hadir();
				$this->registrasi_model->nama();
				redirect(base_url('tamu/registrasi/masuk'));
			}else{
				$this->registrasi_model->sesi();
				redirect(base_url('tamu/registrasi/masuk'));
			}
		}
		redirect(base_url('tamu/registrasi'));
	}

	public function masuk()
	{
		if($this->registrasi_model->belum_regis()) redirect(base_url('tamu/registrasi'));
		$data['pengguna'] = $this->registrasi_model->pengguna();
		$data['angket'] = $this->angket_model->data();

		$this->load->view('tamu/masuk',$data);
	}

	public function putus()
	{
		$this->registrasi_model->putus();

		redirect(base_url('tamu/registrasi/masuk'));
	}

}
