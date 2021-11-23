<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Game extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('overview_model');
		$this->load->model('game_model');
		if($this->login_model->belumMasuk()) redirect(base_url('admin/login'));
	}

	public function game($id)
	{
		$data['pengguna'] = $this->overview_model->pengguna();
		$data['game'] = $this->game_model->game(base64_decode($id));
		$data['soal'] = $this->game_model->soal(base64_decode($id));
		$data['kode_soal'] = $this->game_model->kode_soal();

		$this->load->view('admin/game',$data);
	}

	public function ganti_babak($id)
	{
		$this->game_model->ganti_babak(base64_decode($id));

		redirect(base_url('admin/game/game/').$id);
	}

	public function tambah($id)
	{
		$this->game_model->tambah(base64_decode($id));

		redirect(base_url('admin/game/game/').$id);
	}

	public function giliran($kode,$id)
	{
		$this->game_model->giliran($kode,base64_decode($id));

		redirect(base_url('admin/game/game/').$id);
	}

	public function soal($kode,$id)
	{
		$this->game_model->ubah_soal($kode,base64_decode($id));

		redirect(base_url('admin/game/game/').$id);
	}


}
