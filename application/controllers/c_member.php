<?php

class C_member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_konsumen');
	}

	public function a_delete(){
		$id= $this->input->post('delete_member');
		$this->m_konsumen->deleteMember($id);
		redirect('c_admin');
	}

	public function a_editmember($id){

		$where = array(
				'id' => $id
			);

		$datamember = $this->m_konsumen->getDataById('sys_user', $where)->result();

		echo json_encode($datamember[0]);

	}

	public function a_updatemember(){
		$id = $this->input->post('editid');
		$namalengkap = $this->input->post('editnamalengkap');
		$alamat = $this->input->post('editalamat');
		$jeniskelamin = $this->input->post('editjeniskelamin');
		$nohp = $this->input->post('editnohp');
		$email = $this->input->post('editemail');

		$dataupdate = array(
				'nama' => $namalengkap,
				'alamat' => $alamat,
				'jenis_kel' => $jeniskelamin,
				'nohp' => $nohp,
				'email' => $email
			);

		$where = array(
				'id' => $id
			);

		$result = $this->m_konsumen->updateData($where, $dataupdate, 'sys_user');

		if ($result == TRUE) {
			$this->session->set_flashdata('success', 'Edit member berhasil!');
		} else {
			$this->session->set_flashdata('failed', 'Edit member gagal!');
		}

		redirect('c_admin');
	}

	public function a_tambahmember(){
		$namalengkap = $this->input->post('namalengkap');
		$password = md5($this->input->post('password'));
		$alamat = $this->input->post('alamat');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$nohp = $this->input->post('nohp');
		$email = $this->input->post('email');
		$role = $this->input->post('role');

		$tambahmember = array(
				'nama' => $namalengkap,
				'password' => $password,
				'alamat' => $alamat,
				'jenis_kel' => $jeniskelamin,
				'nohp' => $nohp,
				'email' => $email,
				'sys_role_id' => $role
			);

		$result = $this->m_konsumen->insert('sys_user', $tambahmember);

		if ($result == TRUE) {
			$this->session->set_flashdata('success', 'Tambah member berhasil!');
		} else {
			$this->session->set_flashdata('failed', 'Tambah member gagal!');
		}

		redirect('c_admin');
	}

	public function cetakMember(){
		$data['member']= $this->m_konsumen->getData('sys_user')->result();
		$this->load->view('admin/cetak_member',$data);
	}
}
?>