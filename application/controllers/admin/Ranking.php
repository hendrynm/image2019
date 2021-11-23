<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ranking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('overview_model');
		$this->load->model('ranking_model');
		if($this->login_model->belumMasuk()) redirect(base_url('admin/login'));
	}

	public function game1()
	{
		$data['pengguna'] = $this->overview_model->pengguna();
		$data['ranking1'] = $this->ranking_model->ranking1();

		$this->load->view('admin/ranking1',$data);
	}

	public function game2()
	{
		$data['pengguna'] = $this->overview_model->pengguna();

		$data['p1'] = $this->ranking_model->p1();
		$data['p2'] = $this->ranking_model->p2();
		$data['p3a'] = $this->ranking_model->p3a();
		$data['p3b'] = $this->ranking_model->p3b();
		$data['p4'] = $this->ranking_model->p4();
		$data['p5'] = $this->ranking_model->p5();
		$data['p6'] = $this->ranking_model->p6();
		$data['p7'] = $this->ranking_model->p7();
		$data['p8'] = $this->ranking_model->p8();
		$data['p9'] = $this->ranking_model->p9();
		$data['p10'] = $this->ranking_model->p10();
		$data['p11'] = $this->ranking_model->p11();
		$data['p12'] = $this->ranking_model->p12();
		$data['p13a'] = $this->ranking_model->p13a();
		$data['p13b'] = $this->ranking_model->p13b();
		$data['p14'] = $this->ranking_model->p14();
		$data['p15'] = $this->ranking_model->p15();
		$data['p16'] = $this->ranking_model->p16();
		$data['p17'] = $this->ranking_model->p17();
		$data['p18'] = $this->ranking_model->p18();
		$data['p19'] = $this->ranking_model->p19();
		$data['p20'] = $this->ranking_model->p20();


		$data['nama1'] = $this->ranking_model->nama1();
		$data['nama2'] = $this->ranking_model->nama2();
		$data['nama3a'] = $this->ranking_model->nama3a();
		$data['nama3b'] = $this->ranking_model->nama3b();
		$data['nama4'] = $this->ranking_model->nama4();
		$data['nama5'] = $this->ranking_model->nama5();
		$data['nama6'] = $this->ranking_model->nama6();
		$data['nama7'] = $this->ranking_model->nama7();
		$data['nama8'] = $this->ranking_model->nama8();
		$data['nama9'] = $this->ranking_model->nama9();
		$data['nama10'] = $this->ranking_model->nama10();
		$data['nama11'] = $this->ranking_model->nama11();
		$data['nama12'] = $this->ranking_model->nama12();
		$data['nama13a'] = $this->ranking_model->nama13a();
		$data['nama13b'] = $this->ranking_model->nama13b();
		$data['nama14'] = $this->ranking_model->nama14();
		$data['nama15'] = $this->ranking_model->nama15();
		$data['nama16'] = $this->ranking_model->nama16();
		$data['nama17'] = $this->ranking_model->nama17();
		$data['nama18'] = $this->ranking_model->nama18();
		$data['nama19'] = $this->ranking_model->nama19();
		$data['nama20'] = $this->ranking_model->nama20();

		$this->load->view('admin/ranking2',$data);
	}

}
