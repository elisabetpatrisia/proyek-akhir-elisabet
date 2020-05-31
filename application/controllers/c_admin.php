<?php
class c_admin extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_konsumen');
		$this->load->model('m_bus');
	}

	public function index(){
		$data['member']= $this->m_konsumen->getData('sys_user')->result();
		$this->load->view('admin/index', $data);
	}

	public function v_profil(){
		if (!isset($this->session->userdata['logged_in'])) {
			$this->load->view('konsumen/index');
		} else {
			$where = array(
					'id' => $this->session->userdata['logged_in']['id']
				);
			$data['profil'] = $this->m_konsumen->getDataById('sys_user', $where)->result();
			$this->load->view('admin/profil_admin', $data);
		}
	}
	public function v_jadwal(){
		$data['jadwal']= $this->m_konsumen->getAllJadwal()->result();
		$data['terminalasal']=$this->m_konsumen->getData('ms_terminal')->result();
		$data['bus'] = $this->m_bus->getBus()->result();
		$this->load->view('admin/jadwal', $data);

	}

	public function v_pemesanan(){
		$data['pemesanan']= $this->m_konsumen->getPemesanan()->result();
		$this->load->view('admin/pemesanan', $data);

	}

	public function v_pembayaran(){
		$data['pembayaran']= $this->m_konsumen->getData('rel_pembayaran')->result();
		$this->load->view('admin/pembayaran', $data);
	}

	public function cetakPembayaran(){
		$data['pembayaran']= $this->m_konsumen->getData('rel_pembayaran')->result();
		$this->load->view('admin/cetak_pembayaran', $data);
	}

	public function a_deletePemesanan($id){
		$this->m_konsumen->deletePenumpang($id);
		$this->m_konsumen->deletePemesanan($id);
		redirect('c_admin/v_pemesanan');
	}

	public function a_deletePembayaran($id){
		$this->m_konsumen->deletePembayaran($id);
		redirect('c_admin/v_pembayaran');
	}


}