<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Angket_model extends CI_Model {

	private $_table = 'elemen';
	private $_table2 = 'angket';

	public function data(){
		return $this->db->where('nrp',$this->session->userdata('nrp'))->get($this->_table2)->num_rows();
	}

	public function nama_2019(){
		return $this->db->where('elemen','2019')->order_by('nama')->get($this->_table)->result();
	}

	public function nama_elemen(){
		return $this->db->where('elemen !=','2019')->order_by('nama')->get($this->_table)->result();
	}

	public function nama_2019_L(){
		return $this->db->where('elemen','2019')->where('jenis','L')->order_by('nama')->get($this->_table)->result();
	}

	public function nama_2019_P(){
		return $this->db->where('elemen','2019')->where('jenis','P')->order_by('nama')->get($this->_table)->result();
	}

	public function nama_elemen_L(){
		return $this->db->where('elemen !=','2019')->where('jenis','L')->order_by('nama')->get($this->_table)->result();
	}

	public function nama_elemen_P(){
		return $this->db->where('elemen !=','2019')->where('jenis','P')->order_by('nama')->get($this->_table)->result();
	}

	public function kirim(){
		$post = $this->input->post();
		$this->nrp = $this->session->userdata('nrp');
		$this->p1 = $post['p1'];
		$this->p2 = $post['p2'];
		$this->p3a = $post['p3a'];
		$this->p3b = $post['p3b'];
		$this->p4 = $post['p4'];
		$this->p5 = $post['p5'];
		$this->p6 = $post['p6'];
		$this->p7 = $post['p7'];
		$this->p8 = $post['p8'];
		$this->p9 = $post['p9'];
		$this->p10 = $post['p10'];
		$this->p11 = $post['p11'];
		$this->p12 = $post['p12'];
		$this->p13a = $post['p13a'];
		$this->p13b = $post['p13b'];
		$this->p14 = $post['p14'];
		$this->p15 = $post['p15'];
		$this->p16 = $post['p16'];
		$this->p17 = $post['p17'];
		$this->p18 = $post['p18'];
		$this->p19 = $post['p19'];
		$this->p20 = $post['p20'];
		$this->db->insert($this->_table2,$this);
	}
}
