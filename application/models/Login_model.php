<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
	private $_table = "admin";

	public function masuk(){
		$post = $this->input->post();

		$this->db->where('username', $post["username"]);
		$pengguna = $this->db->get($this->_table)->row();

		if($pengguna) {
			$cek = $post["token"] == $pengguna->token;
			if($cek){
				$this->session->set_userdata(['koderuang' => $pengguna->username]);
				return true;
			}
		}
		$this->session->set_flashdata('salah', 'username atau token yang Anda masukkan <b>salah!</b>');
		return false;
	}

	public function belumMasuk(){
		return $this->session->userdata('koderuang') === null;
	}
}
