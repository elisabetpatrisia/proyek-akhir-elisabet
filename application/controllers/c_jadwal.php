<?php
class c_jadwal extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_konsumen');
		$this->load->model('m_bus');
	}

	public function v_jadwal(){
		$data['jadwal']= $this->m_konsumen->getAllJadwal()->result();
		$data['terminalasal']=$this->m_konsumen->getData('ms_terminal')->result();
		$data['bus'] = $this->m_bus->getBus()->result();
		$this->load->view('admin/jadwal', $data);

	}

	public function tambahjadwal(){
		$terminalasal = $this->input->post('terminalasal');
		$terminaltujuan = $this->input->post('terminaltujuan');
		$jamkeberangkatan = $this->input->post('jamkeberangkatan');
		$estimasi = $this->input->post('estimasi');
		$tarif = $this->input->post('tarif');
		$id_bus = $this->input->post('bus');

		$cek = substr($estimasi, 2,-2);

		if ($cek == ":") {

			$time1_unix = strtotime(date('Y-m-d').' '.$jamkeberangkatan.':00');
			$time2_unix = strtotime(date('Y-m-d').' '.$estimasi.':00');

			$begin_day_unix = strtotime(date('Y-m-d').' 00:00:00');

			$jamkedatangan = date('H:i', ($time1_unix + ($time2_unix - $begin_day_unix)));

			$datajadwal = array(
				'id_terminal_keberangkatan' => $terminalasal,
				'id_terminal_kedatangan' => $terminaltujuan,
				'jam_keberangkatan' => $jamkeberangkatan,
				'jam_tiba' => $jamkedatangan,
				'estimasiwaktu' => $estimasi,
				'tarif' => $tarif,
				'id_bus' => $id_bus
			);

			$result = $this->m_konsumen->insert('rel_rute', $datajadwal);
		
			if ($result != 1) {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-check\"></i>Tambah rute gagal! <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
			} else {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i>Tambah rute berhasil!<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
			}
		}else {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i>Format estimasi salah!<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		}

		redirect('c_jadwal/v_jadwal');
	}

	public function editJadwal($id){
		$where = array(
				'id_rute' => $id
			);

		$datajadwal = $this->m_konsumen->getDataById('rel_rute', $where)->result();

		echo json_encode($datajadwal[0]);
	}

	public function updateJadwal(){
		$terminalasal = $this->input->post('editterminalasal');
		$terminaltujuan = $this->input->post('editterminaltujuan');
		$jamkeberangkatan = $this->input->post('editjamkeberangkatan');
		$jamkedatangan = $this->input->post('editjamkedatangan');
		$estimasi = $this->input->post('editestimasi');
		$tarif = $this->input->post('edittarif');
		$id_rute = $this->input->post('id_rute');
		$bus = $this->input->post('bus');

		$dataUpdate = array(
				'id_terminal_keberangkatan' => $terminalasal,
				'id_terminal_kedatangan' => $terminaltujuan,
				'jam_keberangkatan' => $jamkeberangkatan,
				'jam_tiba' => $jamkedatangan,
				'estimasiwaktu' => $estimasi,
				'tarif' => $tarif,
				'id_bus' => $bus
			);

		$where = array(
				'id_rute' => $id_rute
			);

		$result = $this->m_konsumen->update($where,$dataUpdate,'rel_rute');

		if ($result == TRUE) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Rute Berhasil Diubah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		} else {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-check\"></i> Data Rute Gagal Diubah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		}
		redirect('c_jadwal/v_jadwal');
	}

	public function deleteJadwal(){

		$id = $this->input->post('delete_jadwal');

		$result = $this->m_konsumen->deleteRute($id);

		if ($result == TRUE) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i>Hapus data berhasil! <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		} else {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-check\"></i>Hapus data gagal!<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		}

		redirect('c_jadwal/v_jadwal');
	}

	public function cetakRute(){
		$data['jadwal']= $this->m_konsumen->getAllJadwal()->result();
		$data['terminalasal']=$this->m_konsumen->getData('ms_terminal')->result();
		$data['bus'] = $this->m_bus->getBus()->result();
		$this->load->view('admin/cetak_datarute',$data);
	}
}