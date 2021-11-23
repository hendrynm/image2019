<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview_model extends CI_Model
{
	private $_table = 'admin';

	public function pengguna(){
		return $this->db->where('username',$this->session->userdata('koderuang'))->get($this->_table)->row();
	}

}
