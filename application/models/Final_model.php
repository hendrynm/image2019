<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Final_model extends CI_Model {

	private $_table = 'final';
	private $_table2 = 'soal';

	public function menang_A(){
		return $this->db->select_sum('poin_total')->where('tim','A')->get($this->_table)->row();
	}

	public function menang_B(){
		return $this->db->select_sum('poin_total')->where('tim','B')->get($this->_table)->row();
	}

	public function game($id){
		return $this->db->where('id',$id)->get($this->_table)->row();
	}

	public function kirim($id){
		$post = $this->input->post();

		$this->db->set('pil1',strtolower($post['pil1']));
		$this->db->set('pil2',strtolower($post['pil2']));
		$this->db->set('pil3',strtolower($post['pil3']));
		$this->db->set('pil4',strtolower($post['pil4']));
		$this->db->set('pil5',strtolower($post['pil5']));
		return $this->db->where('id',$id)->update($this->_table);
	}

	public function cek($id,$kode){
		$data['game'] = $this->game($id);
		$data['soal'] = $this->db->where('kode_soal',$kode)->get($this->_table2)->row();

		$pil = '';
		switch($kode){
			case(10):$pil=$data['game']->pil1;break;
			case(3):$pil=$data['game']->pil2;break;
			case(12):$pil=$data['game']->pil3;break;
			case(7):$pil=$data['game']->pil4;break;
			case(15):$pil=$data['game']->pil5;break;
			default:$pil='';
		}

		$poin=0;
		if(strtolower($data['soal']->pil1) == $pil) { $poin=100; }
		else if(strtolower($data['soal']->pil2) == $pil) { $poin=80; }
		else if(strtolower($data['soal']->pil3) == $pil) { $poin=60; }
		else if(strtolower($data['soal']->pil4) == $pil) { $poin=40; }
		else if(strtolower($data['soal']->pil5) == $pil) { $poin=20; }
		else { $poin=0; }

		switch($kode){
			case(10):$this->db->set('poin1',$poin)->set('poin_total',$data['game']->poin_total+$poin,FALSE);break;
			case(3):$this->db->set('poin2',$poin)->set('poin_total',$data['game']->poin_total+$poin,FALSE);break;
			case(12):$this->db->set('poin3',$poin)->set('poin_total',$data['game']->poin_total+$poin,FALSE);break;
			case(7):$this->db->set('poin4',$poin)->set('poin_total',$data['game']->poin_total+$poin,FALSE);break;
			case(15):$this->db->set('poin5',$poin)->set('poin_total',$data['game']->poin_total+$poin,FALSE);break;
			default:break;
		}
		return $this->db->where('id',$id)->update($this->_table);
	}
}
