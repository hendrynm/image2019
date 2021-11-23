<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminRegistrasi_model extends CI_Model {

	private $_table = 'regis';

	public function aktif(){
		return $this->db->where('aktif','aktif')->get($this->_table)->result();
	}

	public function ubah_pasif($id){
		return $this->db->set('aktif','pasif')->where('nrp',$id)->update($this->_table);
	}

	public function semua(){
		return $this->db->order_by('angkatan','asc')->get($this->_table)->result();
	}
}
