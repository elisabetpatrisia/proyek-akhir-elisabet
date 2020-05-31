<?php
class m_penumpang extends CI_Model
{
	
	function getPenumpang($tanggal, $id_rute){
		$condition = "d.tanggal = "."'".$tanggal."' AND b.tgl_keberangkatan ="."'".$tanggal."' AND c.id_rute ="."'".$id_rute
		."'";
		$this->db->from('rel_penumpang a');
		$this->db->join('rel_pemesanan b', 'a.kode_pemesanan = b.kode_pemesanan');
		$this->db->join('rel_rute c', 'b.id_rute = c.id_rute');
		$this->db->join('rel_kuota_keberangkatan d', 'c.id_rute = d.id_rute');
		$this->db->where($condition);
		
		return $this->db->get();
	}

	function tambahKuota($data){
		$query = $this->db->insert('rel_kuota_keberangkatan',$data);

		if ($this->db->affected_rows() == 1) {
			return $query;
		} else {
			return FALSE;
		}
	}

	function getAllKuota(){
		$this->db->from('rel_kuota_keberangkatan a');
		$this->db->join('rel_rute b','a.id_rute = b.id_rute');
		
		return $this->db->get();
	}

	function getKuotaPenumpang($tgl){
		$this->db->from('rel_kuota_keberangkatan a');
		$this->db->join('rel_rute b','a.id_rute = b.id_rute');
		$this->db->where('a.tanggal',$tgl);
		return $this->db->get();
	}
}
?>