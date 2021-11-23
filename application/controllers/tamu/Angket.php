<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Angket extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('angket_model');
		$this->load->model('registrasi_model');
	}

	public function index()
	{
		if($this->registrasi_model->belum_regis()) redirect(base_url('tamu/registrasi'));

		$data['nama_2019'] = $this->angket_model->nama_2019();
		$data['nama_2019_L'] = $this->angket_model->nama_2019_L();
		$data['nama_2019_P'] = $this->angket_model->nama_2019_P();

		$data['nama_elemen'] = $this->angket_model->nama_elemen();
		$data['nama_elemen_L'] = $this->angket_model->nama_elemen_L();
		$data['nama_elemen_P'] = $this->angket_model->nama_elemen_P();

		$this->load->view('tamu/angket',$data);
	}

	public function kirim()
	{
		$this->angket_model->kirim();

		redirect(base_url('tamu/registrasi/masuk'));
	}

}
