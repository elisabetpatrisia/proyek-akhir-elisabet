<?php

class C_bus extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_bus');
		$this->load->library('upload');
	}

	public function index(){
		if (!isset($this->session->userdata['logged_in'])) {
			$this->load->view('konsumen/index');
		} else {
			$data['bus'] = $this->m_bus->getBus()->result();
			$this->load->view('admin/bus',$data);
			//print_r($data['bus']);
		}
	}

	public function tambahBus(){
		$nopol = $this->input->post('nopol'); 
		$tahun = $this->input->post('tahun');
		$description = $this->input->post('deskripsi');
		$merk = $this->input->post('merk');

		$config['upload_path'] = './assets/images/bus/';
		$config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG|gif|GIF';
		$config['max_size']	= '100000'; //in kb
        $this->upload->initialize($config);

        if (! $this->upload->do_upload('foto')) {
            echo $this->upload->display_errors();
        } else {
        	$data = array(
        			'nopol_bus' => $nopol,
        			'tahun' => $tahun,
        			'description' => $description,
        			'merk' => $merk,
        			'foto' =>  $this->upload->data('file_name')
        		);

        	$result = $this->m_bus->insert($data);
        }

        if ($result == TRUE) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Bus Berhasil Ditambah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		} else {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Bus Gagal Ditambah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		}	
		redirect('C_bus');
	}

	public function hapusBus(){
		$id_bus	= $this->input->post('id_bus');

		$result = $this->m_bus->deleteBus($id_bus);

		if ($result == TRUE) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Bus Berhasil Dihapus<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		} else {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Bus Gagal Dihapus<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		}	
		redirect('C_bus');
	}

	public function editBus($id){

		$databus = $this->m_bus->getDataBus($id);

		echo json_encode($databus[0]);

	}

	public function updateBus(){
		$id = $this->input->post('id');
		$nopol = $this->input->post('nopol');
		$merk = $this->input->post('merk');
		$tahun = $this->input->post('tahun');
		$deskripsi = $this->input->post('deskripsi');
		$foto = $this->input->post('foto');

		$databus = array(
				'nopol_bus' => $nopol,
				'merk' => $merk,
				'tahun' => $tahun,
				'description' => $deskripsi
			);

		$result = $this->m_bus->updateBus($id,$databus);
		if ($result == TRUE) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Bus Berhasil Diubah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		} else {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Bus Gagal Diubah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		}	
		redirect('C_bus');
	}

	public function cetakBus(){
		$data['bus'] = $this->m_bus->getBus()->result();
		$this->load->view('admin/cetak_bus',$data);
	}
}
?>