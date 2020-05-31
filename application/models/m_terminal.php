<?php
class M_terminal extends CI_Model
{
	function getAllData(){
		$this->db->from('ms_terminal');
		return $this->db->get()->result();
	}

	function insertTerminal($data){
		$query = $this->db->insert('ms_terminal',$data);

		if ($this->db->affected_rows() == 1) {
			return $query;
		} else {
			return FALSE;
		}
	}

	function getDataById($id){
		$this->db->from('ms_terminal');
		$this->db->where('id',$id);

		$query = $this->db->get();	

		if ($query->num_rows() == 1) {
			return $query->result();
		}
	}

	function hapusTerminal($id){
		$this->db->where('id',$id);
		$this->db->delete('ms_terminal');
		return TRUE;
	}

	function updateTerminal($id,$data){
		 $this->db->where('id',$id);
    	 $this->db->update('ms_terminal',$data);

    	 return TRUE;
	}
}
?>