<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi_model extends CI_Model {

	private $_table = 'regis';
	private $_table2 = 'tamu';
	private $_table3 = 'setting';

	public function cek_data(){
		$post = $this->input->post();
		$nama = ucfirst($post["namaLengkap"]);
		$nrp = $post["nrp"];
		$angkatan = $post['angkatan'];

		$cek_nama = $this->db->where('nama',$nama)->get($this->_table2)->num_rows();
		$cek_nrp = $this->db->where('nrp',$nrp)->get($this->_table2)->num_rows();
		$cek = $cek_nama + $cek_nrp;
		$jumlah = $this->db->where('nama',$nama)->where('nrp',$nrp)->get($this->_table2)->num_rows();

		if($jumlah == 1 && $angkatan > 2016 && $cek == 2){
			return true;
		} else if($jumlah == 0 && $angkatan <= 2016 & $cek == 0){
			return true;
		} else{
			$this->session->set_flashdata('salah', 'Maaf, Anda <b>TIDAK TERDAFTAR</b> sebagai tamu kami!
			Pastikan data yang Anda masukkan sudah benar');
			return false;
		}
	}

	public function cek_duplikat(){
		$post = $this->input->post();
		$nama = ucfirst($post["namaLengkap"]);
		$nrp = $post["nrp"];

		$jumlah = $this->db->where('nama',$nama)->or_where('nrp',$nrp)->get($this->_table)->num_rows();

		if($jumlah == 0){
			return true;
		} else{
			return false;
		}
	}

	public function sesi(){
		$post = $this->input->post();
		$nrp = $post["nrp"];

		$this->session->set_userdata(['nrp' => $nrp]);
	}

	public function hadir(){
		$post = $this->input->post();
		$this->nama = ucfirst($post["namaLengkap"]);
		$this->nrp = $post["nrp"];
		$this->angkatan = $post['angkatan'];
		$this->aktif = 'aktif';
		$this->zoom = '';
		$this->jam = date("Y-m-d H:i:s");
		$this->db->insert($this->_table,$this);

		$this->session->set_userdata(['nrp' => $this->nrp]);
	}

	public function nama(){
		$data['terakhir'] = $this->db->get($this->_table)->last_row();
		$data['hadir'] = $this->db->where('nrp',$this->session->userdata('nrp'))->get($this->_table)->row();
		$data['setting'] = $this->db->get($this->_table3)->row();

		$id = $data['hadir']->id;
		$angkatan = substr($data['hadir']->angkatan,2);
		$nama = $data['hadir']->nama;

		$i = $data['setting']->batas_atas;
		$j = $data['setting']->kode_ruang;
		$k = '';
		$l = '';
		if($data['terakhir']->id == $i){
			$this->db->set('batas_atas','batas_atas+20',FALSE);
			$this->db->set('kode_ruang','kode_ruang+1',FALSE);
			$this->db->update($this->_table3);
		}
		switch($data['hadir']->id %4){
			case(0):$k='A';break;
			case(1):$k='B';break;
			case(2):$k='C';break;
			case(3):$k='D';break;
			default:$k='';
		}
		switch($data['hadir']->id %5){
			case(0):$l='1';break;
			case(1):$l='2';break;
			case(2):$l='3';break;
			case(3):$l='4';break;
			case(4):$l='5';break;
			default:$l='';
		}

		$nama = strval($j . $k . $l . '-' . $angkatan . '-' . $nama);

		$this->db->set('zoom',$nama)->where('id',$id)->update($this->_table);
	}

	public function pengguna(){
		return $this->db->where('nrp',$this->session->userdata('nrp'))->get($this->_table)->row();
	}

	public function putus(){
		$this->db->set('aktif','aktif')->where('nrp', $this->session->userdata('nrp'))->update($this->_table);
		return $this->session->set_flashdata('berhasil', 'Permintaan Anda untuk bergabung telah kami terima.
		Mohon menunggu untuk kami asese di Zoom Meeting.');
	}

	public function belum_regis(){
		return $this->db->where('nrp',$this->session->userdata('nrp'))->get($this->_table)->num_rows() == 0;
	}

}
