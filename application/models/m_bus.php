<?php
class M_bus extends CI_Model
{
	
	public function getBus(){
		$this->db->from('ms_bus');
		return $this->db->get();
	}	

	public function insert($data){
		$query = $this->db->insert('ms_bus',$data);

		if ($this->db->affected_rows() == 1) {
			return $query;
		} else {
			return FALSE;
		}
	}

	public function deleteBus($id){
		$this->db->where('id',$id);
		$this->db->delete('ms_bus');
		return TRUE;
	}

	public function getDataBus($id){
		$this->db->from('ms_bus');
		$this->db->where('id',$id);

		$query = $this->db->get();	

		if ($query->num_rows() == 1) {
			return $query->result();
		}
	}

	function updateBus($id,$data){
		 $this->db->where('id',$id);
    	 $this->db->update('ms_bus',$data);

    	 return TRUE;
	}

}
?>