<?php

class m_konsumen extends CI_Model
{
	
	public function insert($table,$data){
		$query = $this->db->insert($table, $data);
		return $query;
	}

	public function read_user_information($email, $password){
		$condition = "email ="."'".$email."' AND password = "."'".$password."'";
		$this->db->from('sys_user');
		$this->db->where($condition);

		return $this->db->get();
	}

	public function read_user_email($email){
		$this->db->from('sys_user');
		$this->db->where('email', $email);		
	
		return $this->db->get();
	}

	public function update($where,$data,$table){
		 $this->db->where($where);
    	 $this->db->update($table,$data);

    	 return TRUE;
	}

	public function getDataById($table, $where){
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

	public function getData($table){
		$this->db->from($table);
		
		return $this->db->get();
	}

	public function getAllJadwal(){
		$this->db->from('rel_rute');
		$this->db->join('ms_bus','rel_rute.id_bus = ms_bus.id');

		return $this->db->get();
	}

	public function getDataLaporan($periode, $status){
		$condition= "REPLACE(tgl_pemesanan,RIGHT(tgl_pemesanan,3),"."'"." "."') ="."'".$periode."' AND status = "."'".$status."'";
		$this->db->from('rel_pemesanan');
		$this->db->where($condition);
		
		return $this->db->get();
	}

	public function getPemesanan(){
		$this->db->from('rel_pemesanan');
		$this->db->order_by('tgl_pemesanan', 'DESC');

		return $this->db->get();
	}

	public function checkout($kode_pemesanan){
		$this->db->select('*');
		$this->db->from('rel_pemesanan a');
		$this->db->join('rel_penumpang b','a.kode_pemesanan = b.kode_pemesanan');
		$this->db->join('rel_rute c','a.id_rute = c.id_rute');
		$this->db->where('a.kode_pemesanan', $kode_pemesanan);

		return $this->db->get();
	}

	public function pemesanan($kode_pemesanan){
		$this->db->select('*');
		$this->db->from('rel_pemesanan a');
		$this->db->join('rel_penumpang b','a.kode_pemesanan = b.kode_pemesanan');
		$this->db->join('rel_rute c','a.id_rute = c.id_rute');
		$this->db->join('ms_bank d','a.ms_bank_id = d.id');
		$this->db->where('a.kode_pemesanan', $kode_pemesanan);

		return $this->db->get();
	}
	
	public function deletePemesanan($id){
		$this->db->where('kode_pemesanan',$id);
		$this->db->delete('rel_pemesanan');
		return TRUE;
	}

	public function deletePenumpang($id){
		$this->db->where('kode_pemesanan', $id);
		$this->db->delete('rel_penumpang');
		return TRUE;
	}

	public function deleteRute($id){
		$this->db->where('id_rute', $id);
		$this->db->delete('rel_rute');
		return TRUE;
	}

	public function deleteMember($id){
		$this->db->where('id', $id);
		$this->db->delete('sys_user');
		return TRUE;
	}

	public function deletePembayaran($id){
		$this->db->where('kode_pembayaran', $id);
		$this->db->delete('rel_pembayaran');
		return TRUE;
	}

	public function updateData($where, $data, $table){
		 $this->db->where($where);
    	 $this->db->update($table,$data);

    	 return TRUE;
	}

	public function getKuota($tgl, $id_rute){
		$condition = "tanggal ="."'".$tgl."'"."AND a.id_rute ="."'".$id_rute."'";
		$this->db->from('rel_rute a');
		$this->db->join('rel_kuota_keberangkatan b', 'a.id_rute = b.id_rute');
		$this->db->where($condition);

		return $this->db->get();
	}

	public function updatekuota($id_kuota,$data){
		$this->db->where('id_kuota', $id_kuota);
		$this->db->update('rel_kuota_keberangkatan', $data);

		return TRUE;
	}
}