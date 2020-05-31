<?php
class c_pemesanan extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_konsumen');
	}

	public function v_pemesanan(){
		$data['pemesanan']= $this->m_konsumen->getData('rel_pemesanan')->result();
		$this->load->view('admin/pemesanan', $data);

	}

	public function a_deletePemesanan(){
		$id= $this->input->post('delete_pemesanan');
		$this->m_konsumen->deletePenumpang($id);
		$this->m_konsumen->deletePemesanan($id);
		redirect('c_admin/v_pemesanan');
	}

	public function a_editData($kode){

		$where = array(
				'kode_pemesanan' => $kode
			);

		$pemesanan = $this->m_konsumen->getDataById('rel_pemesanan', $where)->result();
		
		echo json_encode($pemesanan[0]);

	}

	public function a_penumpang($kode){
		$where = array(
				'kode_pemesanan' => $kode
			);

		$penumpang = $this->m_konsumen->getDataById('rel_penumpang', $where)->result();
		
		$no = 1;
		foreach ($penumpang as $key) {

		echo '
				<div>
					<span>'.$no.'.</span>
					<span>Nama Penumpang : </span>
					<span>'.$key->nama_penumpang.'</span>
				</div>
				<div>
					<span>No Kursi : </span>
					<span>'.$key->kursi.'</span>
				</div>
		';
		$no++;
		}

	}

	public function updateStatusPembayaran($kode_pemesanan, $status){

		$where = array(
    			'kode_pemesanan' => $kode_pemesanan
    		);

		$dataStatus = array(
    			'status' => $status
    		);

    	$result = $this->m_konsumen->update($where,$dataStatus,'rel_pemesanan');
    	if ($result == TRUE) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"></i>Upload bukti pembayaran berhasil! <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		} else {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"></i>Upload bukti pembayaran gagal! <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		}
		redirect('c_admin/v_pembayaran');
	}

	public function a_updateData(){
		$kode_pemesanan = $this->input->post('kode_pemesanan');
		$nama_pemesan = $this->input->post('nama_pemesan');
		$nohp = $this->input->post('nohp');
		$email = $this->input->post('email');
		$totalHarga = $this->input->post('totalHarga');

		$datapenumpang = array(
				'nama_pemesan' => $nama_pemesan,
				'nohp' => $nohp,
				'email' => $email,
				'totalHarga' => $totalHarga
			);

		$where = array(
				'kode_pemesanan' => $kode_pemesanan
			);

		$this->m_konsumen->updateData($where, $datapenumpang, 'rel_pemesanan');

		redirect('c_pemesanan/v_pemesanan');
	}

	public function cetakPemesanan(){
		$data['periode'] = $this->input->post('periode');

		if (empty($data['periode'])) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"></i>Input periode terlebih dahulu ! <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
			redirect('c_pemesanan/v_pemesanan');

		} else {
			$data['pemesanan']= $this->m_konsumen->getDataLaporan($data['periode'], "1")->result();
			$data['pemesananBL']= $this->m_konsumen->getDataLaporan($data['periode'], "0")->result();
			$data['pemesananEX']= $this->m_konsumen->getDataLaporan($data['periode'], "2")->result();
			
			$this->load->view('admin/cetak_pemesanan',$data);
		}
	}
}