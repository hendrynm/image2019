<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ranking_model extends CI_Model {

	private $_table = 'admin';
	private $_table2 = 'angket';
	private $_table3 = 'elemen';

	public function ranking1(){
		return $this->db->where('id !=',50)->get($this->_table)->result();
	}

	public function p1(){
		return $this->db->select('p1')->group_by('p1')->order_by('COUNT(p1)','desc')->get($this->_table2)->row();
	}

	public function nama1(){
		return $this->db->where('nrp',$this->p1()->p1)->get($this->_table3)->row();
	}

	public function p2(){
		return $this->db->select('p2')->group_by('p2')->order_by('COUNT(p2)','desc')->get($this->_table2)->row();
	}

	public function nama2(){
		return $this->db->where('nrp',$this->p2()->p2)->get($this->_table3)->row();
	}

	public function p3a(){
		return $this->db->select('p3a')->group_by('p3a')->order_by('COUNT(p3a)','desc')->get($this->_table2)->row();
	}

	public function nama3a(){
		return $this->db->where('nrp',$this->p3a()->p3a)->get($this->_table3)->row();
	}

	public function p3b(){
		return $this->db->select('p3b')->group_by('p3b')->order_by('COUNT(p3b)','desc')->get($this->_table2)->row();
	}

	public function nama3b(){
		return $this->db->where('nrp',$this->p3b()->p3b)->get($this->_table3)->row();
	}

	public function p4(){
		return $this->db->select('p4')->group_by('p4')->order_by('COUNT(p4)','desc')->get($this->_table2)->row();
	}

	public function nama4(){
		return $this->db->where('nrp',$this->p4()->p4)->get($this->_table3)->row();
	}

	public function p5(){
		return $this->db->select('p5')->group_by('p5')->order_by('COUNT(p5)','desc')->get($this->_table2)->row();
	}

	public function nama5(){
		return $this->db->where('nrp',$this->p5()->p5)->get($this->_table3)->row();
	}

	public function p6(){
		return $this->db->select('p6')->group_by('p6')->order_by('COUNT(p6)','desc')->get($this->_table2)->row();
	}

	public function nama6(){
		return $this->db->where('nrp',$this->p6()->p6)->get($this->_table3)->row();
	}

	public function p7(){
		return $this->db->select('p7')->group_by('p7')->order_by('COUNT(p7)','desc')->get($this->_table2)->row();
	}

	public function nama7(){
		return $this->db->where('nrp',$this->p7()->p7)->get($this->_table3)->row();
	}

	public function p8(){
		return $this->db->select('p8')->group_by('p8')->order_by('COUNT(p8)','desc')->get($this->_table2)->row();
	}

	public function nama8(){
		return $this->db->where('nrp',$this->p8()->p8)->get($this->_table3)->row();
	}

	public function p9(){
		return $this->db->select('p9')->group_by('p9')->order_by('COUNT(p9)','desc')->get($this->_table2)->row();
	}

	public function nama9(){
		return $this->db->where('nrp',$this->p9()->p9)->get($this->_table3)->row();
	}

	public function p10(){
		return $this->db->select('p10')->group_by('p10')->order_by('COUNT(p10)','desc')->get($this->_table2)->row();
	}

	public function nama10(){
		return $this->db->where('nrp',$this->p10()->p10)->get($this->_table3)->row();
	}

	public function p11(){
		return $this->db->select('p11')->group_by('p11')->order_by('COUNT(p11)','desc')->get($this->_table2)->row();
	}

	public function nama11(){
		return $this->db->where('nrp',$this->p11()->p11)->get($this->_table3)->row();
	}

	public function p12(){
		return $this->db->select('p12')->group_by('p12')->order_by('COUNT(p12)','desc')->get($this->_table2)->row();
	}

	public function nama12(){
		return $this->db->where('nrp',$this->p12()->p12)->get($this->_table3)->row();
	}

	public function p13a(){
		return $this->db->select('p13a')->group_by('p13a')->order_by('COUNT(p13a)','desc')->get($this->_table2)->row();
	}

	public function nama13a(){
		return $this->db->where('nrp',$this->p13a()->p13a)->get($this->_table3)->row();
	}

	public function p13b(){
		return $this->db->select('p13b')->group_by('p13b')->order_by('COUNT(p13b)','desc')->get($this->_table2)->row();
	}

	public function nama13b(){
		return $this->db->where('nrp',$this->p13b()->p13b)->get($this->_table3)->row();
	}

	public function p14(){
		return $this->db->select('p14')->group_by('p14')->order_by('COUNT(p14)','desc')->get($this->_table2)->row();
	}

	public function nama14(){
		return $this->db->where('nrp',$this->p14()->p14)->get($this->_table3)->row();
	}

	public function p15(){
		return $this->db->select('p15')->group_by('p15')->order_by('COUNT(p15)','desc')->get($this->_table2)->row();
	}

	public function nama15(){
		return $this->db->where('nrp',$this->p15()->p15)->get($this->_table3)->row();
	}

	public function p16(){
		return $this->db->select('p16')->group_by('p16')->order_by('COUNT(p16)','desc')->get($this->_table2)->row();
	}

	public function nama16(){
		return $this->db->where('nrp',$this->p16()->p16)->get($this->_table3)->row();
	}

	public function p17(){
		return $this->db->select('p17')->group_by('p17')->order_by('COUNT(p17)','desc')->get($this->_table2)->row();
	}

	public function nama17(){
		return $this->db->where('nrp',$this->p17()->p17)->get($this->_table3)->row();
	}

	public function p18(){
		return $this->db->select('p18')->group_by('p18')->order_by('COUNT(p18)','desc')->get($this->_table2)->row();
	}

	public function nama18(){
		return $this->db->where('nrp',$this->p18()->p18)->get($this->_table3)->row();
	}

	public function p19(){
		return $this->db->select('p19')->group_by('p19')->order_by('COUNT(p19)','desc')->get($this->_table2)->row();
	}

	public function nama19(){
		return $this->db->where('nrp',$this->p19()->p19)->get($this->_table3)->row();
	}

	public function p20(){
		return $this->db->select('p20')->group_by('p20')->order_by('COUNT(p20)','desc')->get($this->_table2)->row();
	}

	public function nama20(){
		return $this->db->where('nrp',$this->p20()->p20)->get($this->_table3)->row();
	}
}
