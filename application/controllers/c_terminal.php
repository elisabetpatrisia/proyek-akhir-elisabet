<?php

class C_terminal extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_terminal');
	}

	public function index(){
		if (!isset($this->session->userdata['logged_in'])) {
			$this->load->view('konsumen/index');
		} else {
			$data['terminal'] = $this->m_terminal->getAllData();
			$this->load->view('admin/terminal',$data);
		}
	}

	public function tambahTerminal(){
		if (!isset($this->session->userdata['logged_in'])) {
			$this->load->view('konsumen/index');
		} else {
			$nama_terminal = $this->input->post('nama_terminal');
			$kota = $this->input->post('kota');
			$alamat = $this->input->post('alamat');

			$dataterminal = array(
					'nama_terminal' => $terminal,
					'kota' => $kota,
					'alamat' => $alamat
				);

			$result = $this->m_terminal->insertTerminal($dataterminal);
			if ($result == FALSE) {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Terminal Gagal Ditambah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
			} else {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Terminal Berhasil Ditambah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
			}
			redirect('admin/terminal');
		}
	}

	public function hapusTerminal(){
		if (!isset($this->session->userdata['logged_in'])) {
			$this->load->view('konsumen/index');
		} else {
			$id_terminal = $this->input->post('id_terminal');

			$result = $this->m_terminal->hapusTerminal($id_terminal);

			if ($result == TRUE) {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Terminal Berhasil Ditambah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
			} else {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Terminal Gagal Ditambah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
			}
			redirect('admin/terminal');
		}
	}

	public function editTerminal($id){
		if (!isset($this->session->userdata['logged_in'])) {
			$this->load->view('konsumen/index');
		} else {

			$dataterminal = $this->m_terminal->getDataById($id);

			echo json_encode($dataterminal[0]);
		}
	}

	public function updateTerminal(){
		if (!isset($this->session->userdata['logged_in'])) {
			$this->load->view('konsumen/index');
		} else {
			$id_terminal = $this->input->post('id_terminal');
			$nama_terminal = $this->input->post('nama_terminal');
			$kota = $this->input->post('kota');
			$alamat = $this->input->post('alamat');

			$dataterminal = array(
					'nama_terminal' => $nama_terminal,
					'kota' => $kota,
					'alamat' => $alamat
				);

			$result = $this->m_terminal->updateTerminal($id_terminal,$dataterminal);
			if ($result == TRUE) {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Terminal Berhasil Diubah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
			} else {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Terminal Gagal Diubah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
			}
		redirect('admin/terminal');	
		}
	}

	public function cetakTerminal(){
		$data['terminal'] = $this->m_terminal->getAllData();
		$this->load->view('admin/cetak_terminal',$data);
	}
}
?>