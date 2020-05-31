<?php

class M_rute extends CI_Model
{
	public function getTerminal(){
		$this->db->from('ms_terminal');
		return $this->db->get();
	}

	public function getRuteKedatangan($kedatangan){
		$condition = "id_terminal_kedatangan ="."'".$kedatangan."'";
		$this->db->from('rel_rute a');
		$this->db->join('ms_terminal b','a.id_terminal_kedatangan = b.id');
		$this->db->join('ms_bus d','a.id_bus = d.id');
		$this->db->where($condition);

		return $this->db->get();
	}

	public function getRute($kedatangan,$naikdi){
		$condition = "id_terminal_kedatangan ="."'".$kedatangan."' AND id_terminal_keberangkatan ="."'".$naikdi."'";
		$this->db->from('rel_rute a');
		$this->db->join('ms_terminal b','a.id_terminal_kedatangan = b.id');
		$this->db->join('ms_bus d','a.id_bus = d.id');
		$this->db->where($condition);

		return $this->db->get();
	}		

	public function cekPenumpang($id_rute, $tgl_pemesanan){
		$condition = "tgl_pemesanan ="."'".$tgl_pemesanan."' AND b.id_rute ="."'".$id_rute."' AND b.status != 2";
		$this->db->from('rel_penumpang a');
		$this->db->join('rel_pemesanan b','a.kode_pemesanan = b.kode_pemesanan');
		$this->db->where($condition);
		$this->db->order_by('a.kursi','ASC');

		return $this->db->get();
	}
}
?>