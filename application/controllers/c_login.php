<?php
class c_login extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_konsumen');
	}

	public function a_registrasi(){
		$namalengkap = $this->input->post('namalengkap');
		$nohp = $this->input->post('nohp');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$password = md5($this->input->post('password'));
		$role = 1;

		$check_email = $this->m_konsumen->read_user_email($email);

		if ($check_email->num_rows() > 0) {
			$this->session->set_flashdata('failed', 'Email sudah terdaftar');
			redirect('konsumen/registrasi');
		} else {
			$dataregist = array(
				'nama' => $namalengkap,
				'nohp' => $nohp,
				'email' => $email,
				'alamat' => $alamat,
				'jenis_kel' => $jeniskelamin,
				'password' => $password,
				'sys_role_id' => $role
			);

		$this->m_konsumen->insert('sys_user',$dataregist);
		//print_r($dataregist);
		redirect('konsumen/login');
		}
	}

	public function login(){
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$check = $this->m_konsumen->read_user_information($email, $password);

		if ($check->num_rows() == 1) {
			foreach ($check->result() as $key) {
				$id = $key->id;
				$nama = $key->nama;
				$email = $key->email;
				$password = $key->password;
				$jeniskelamin = $key->jenis_kel;
				$alamat = $key->alamat;
				$nohp = $key->nohp;
				$role_id = $key->sys_role_id;
			}

			$sessiondata = array(
					'id' => $id,
					'nama' => $nama,
					'email' => $email,
					'password' => $password,
					'jeniskelamin' => $jeniskelamin,
					'alamat' => $alamat,
					'nohp' => $nohp,
					'role_id' => $role_id
				);

			$this->session->set_userdata('logged_in',$sessiondata);

			if ($this->session->userdata['logged_in']['role_id'] == 1) {
				redirect('konsumen');
			} else {
				redirect('c_admin');
			}

		} else {
			$this->session->set_flashdata('failed', 'Username dan Password tidak sesuai!');
			redirect('konsumen/login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('konsumen');
	}
}