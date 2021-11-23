<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Game_model extends CI_Model {

	private $_table = 'game';
	private $_table2 = 'soal';
	private $_table3 = 'admin';

	public function kode_soal(){
		return $this->db->get($this->_table2)->result();
	}

	public function game($id){
		return $this->db->where('kode_ruang',$id)->get($this->_table)->row();
	}

	public function soal($id){
		$data['kode_soal'] = $this->game($id);

		if($this->cek_giliran($id) == 'A'){
			return $this->db->where('kode_soal',$data['kode_soal']->kode_soal_A)->get($this->_table2)->row();
		} else{
			return $this->db->where('kode_soal',$data['kode_soal']->kode_soal_B)->get($this->_table2)->row();
		}
	}

	public function giliran($kode,$id){
		return $this->db->set('giliran',$kode)->where('kode_ruang',$id)->update($this->_table);
	}

	public function cek_giliran($id){
		return ($this->game($id)->giliran == 'A') ? 'A' : 'B';
	}

	public function ganti_giliran($id){
		$data['game'] = $this->game($id);
		$hitungA = $data['game']->hitung_A;
		$hitungB = $data['game']->hitung_B;
		$salahA = $data['game']->salah_A;
		$salahB = $data['game']->salah_B;
		$poinA = $data['game']->poin_A;
		$poinB = $data['game']->poin_B;

		if($this->cek_giliran($id) == 'A'){
			if(($salahB == 3 && ($hitungA == 1 || $salahA == 1)) || $poinA == 300){
				$this->selesai($id);
			} else if($salahA == 3){
				$this->db->set('giliran','B')->set('hitung_A','1')->where('kode_ruang',$id)->update($this->_table);
			}
		} else{
			if(($salahA == 3 && ($hitungB == 1 || $salahB == 1)) || $poinB == 300){
				$this->selesai($id);
			} else if($salahB == 3){
				$this->db->set('giliran','A')->set('hitung_B','1')->where('kode_ruang',$id)->update($this->_table);
			}
		}
	}

	public function selesai($id){
		$this->db->set('pil1','benar');
		$this->db->set('pil2','benar');
		$this->db->set('pil3','benar');
		$this->db->set('pil4','benar');
		$this->db->set('pil5','benar');
		$this->db->set('selesai','1');
		$this->db->where('kode_ruang',$id)->update($this->_table);
		$this->session->set_flashdata('salah', '<b>Babak ini telah berakhir</b>');
	}

	public function ganti_babak($id){
		$data['game'] = $this->game($id);
		if($data['game']->babak == 1){
			if($this->cek_giliran($id) == 'A'){
				$this->db->set('babak','2');
				$this->db->set('giliran','A');
				$this->db->set('kode_soal_A',null);
				$this->db->set('kode_soal_B',null);
				$this->db->set('salah_A','0');
				$this->db->set('salah_B','0');
				$this->db->set('hitung_A','0');
				$this->db->set('hitung_B','0');
				$this->db->set('pil1','salah');
				$this->db->set('pil2','salah');
				$this->db->set('pil3','salah');
				$this->db->set('pil4','salah');
				$this->db->set('pil5','salah');
				$this->db->set('selesai','0');
				$this->db->where('kode_ruang',$id)->update($this->_table);
			} else{
				$this->db->set('babak','2');
				$this->db->set('giliran','B');
				$this->db->set('kode_soal_A',null);
				$this->db->set('kode_soal_B',null);
				$this->db->set('salah_A','0');
				$this->db->set('salah_B','0');
				$this->db->set('hitung_A','0');
				$this->db->set('hitung_B','0');
				$this->db->set('pil1','salah');
				$this->db->set('pil2','salah');
				$this->db->set('pil3','salah');
				$this->db->set('pil4','salah');
				$this->db->set('pil5','salah');
				$this->db->set('selesai','0');
				$this->db->where('kode_ruang',$id)->update($this->_table);
			}
		} else{
			$this->db->set('poin_A',$data['game']->poin_A);
			$this->db->set('poin_B',$data['game']->poin_B);
			$this->db->where('id',$id)->update($this->_table3);
			redirect(base_url('admin/overview'));
		}
	}

	public function ubah_soal($kode,$id){
		return $this->db->set('kode_soal_A',$kode)->set('kode_soal_B',$kode)->where('kode_ruang',$id)->update
		($this->_table);
	}

	public function tambah($id){
		$post = $this->input->post();
		$input = strtolower($post["jawaban"]);
		$data['soal'] = $this->soal($id);
		$data['game'] = $this->game($id);

		if($this->cek_giliran($id) == 'A'){
			if($input == strtolower($data['soal']->pil1)) {
				$this->db->set('pil1','benar');
				$this->db->set('poin_A','poin_A + 100',FALSE);
				$this->db->where('kode_ruang',$id)->update($this->_table);
			} else if($input == strtolower($data['soal']->pil2)) {
				$this->db->set('pil2','benar');
				$this->db->set('poin_A','poin_A + 80',FALSE);
				$this->db->where('kode_ruang',$id)->update($this->_table);
			} else if($input == strtolower($data['soal']->pil3)) {
				$this->db->set('pil3','benar');
				$this->db->set('poin_A','poin_A + 60',FALSE);
				$this->db->where('kode_ruang',$id)->update($this->_table);
			} else if($input == strtolower($data['soal']->pil4)) {
				$this->db->set('pil4','benar');
				$this->db->set('poin_A','poin_A + 40',FALSE);
				$this->db->where('kode_ruang',$id)->update($this->_table);
			} else if($input == strtolower($data['soal']->pil5)) {
				$this->db->set('pil5','benar');
				$this->db->set('poin_A','poin_A + 20',FALSE);
				$this->db->where('kode_ruang',$id)->update($this->_table);
			} else{
				$this->db->set('salah_A','salah_A + 1',FALSE)->where('kode_ruang',$id)->update($this->_table);
				$this->session->set_flashdata('salah', 'Jawabanmu <b>tidak ada</b> dalam Top Survei kami');
			}
		} else{
			if($input == strtolower($data['soal']->pil1)) {
				$this->db->set('pil1','benar');
				$this->db->set('poin_B','poin_B + 100',FALSE);
				$this->db->where('kode_ruang',$id)->update($this->_table);
			} else if($input == strtolower($data['soal']->pil2)) {
				$this->db->set('pil2','benar');
				$this->db->set('poin_B','poin_B + 80',FALSE);
				$this->db->where('kode_ruang',$id)->update($this->_table);
			} else if($input == strtolower($data['soal']->pil3)) {
				$this->db->set('pil3','benar');
				$this->db->set('poin_B','poin_B + 60',FALSE);
				$this->db->where('kode_ruang',$id)->update($this->_table);
			} else if($input == strtolower($data['soal']->pil4)) {
				$this->db->set('pil4','benar');
				$this->db->set('poin_B','poin_B + 40',FALSE);
				$this->db->where('kode_ruang',$id)->update($this->_table);
			} else if($input == strtolower($data['soal']->pil5)) {
				$this->db->set('pil5','benar');
				$this->db->set('poin_B','poin_B + 20',FALSE);
				$this->db->where('kode_ruang',$id)->update($this->_table);
			} else{
				$this->db->set('salah_B','salah_B + 1',FALSE)->where('kode_ruang',$id)->update($this->_table);
				$this->session->set_flashdata('salah', 'Jawabanmu <b>tidak ada</b> dalam Top Survei kami');
			}
		}
		$salahA = $data['game']->salah_A;
		$salahB = $data['game']->salah_B;
		if($salahA == 3){
			$this->db->set('hitung_B','1');
			$this->db->where('kode_ruang',$id)->update($this->_table);
		} else if($salahB == 3){
			$this->db->set('hitung_A','1');
			$this->db->where('kode_ruang',$id)->update($this->_table);
		}
		$this->ganti_giliran($id);
	}
}
