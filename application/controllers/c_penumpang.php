<?php
class c_penumpang extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_penumpang');
		$this->load->model('m_konsumen');
		$this->load->model('m_bus');
		$this->load->model('m_terminal');
		$this->load->model('m_rute');
	}

	public function index(){
		$data['terminal'] = $this->m_terminal->getAllData();
		//$penumpang = $this->m_penumpang->getPenumpang('2018-11-11', '1');
		//$data['penumpang'] = $this->m_penumpang->getPenumpang($tanggal);
		$this->load->view('admin/penumpang', $data);
	}

	public function cetak_penumpang($id_rute, $tanggal){

		$data['penumpang'] = $this->m_penumpang->getPenumpang($tanggal, $id_rute)->result();

		$this->load->view('admin/cetak_daftarpenumpang', $data);

	}

	public function caripenumpang(){

		$keberangkatan = $this->input->post('keberangkatan');
		$tujuan = $this->input->post('tujuan');
		$tanggal = date('Y-m-d', strtotime($this->input->post('tanggal')));

		$rute = $this->m_rute->getRute($tujuan,$keberangkatan)->result();

		if (empty($rute)) {
			echo '
				<table class="table table-striped table-bordered data">
					<td style"text-align:center">
					Rute tidak tersedia
					</td>
				</table>';
		} else {

		$penumpang = $this->m_penumpang->getPenumpang($tanggal, $rute[0]->id_rute)->result();
		
		if (empty($penumpang)) {
		echo 	
			'<table class="table table-striped table-bordered data">
				<td style"text-align:center">
				Penumpang tidak ada
				</td>
			</table>';
		} else {
		echo '
			<a href="'.base_url().'c_penumpang/cetak_penumpang/'.$rute[0]->id_rute.'/'.$tanggal.'" class="link-btn" style="float:left; margin-bottom:5px"><i class="fa fa-print"></i> cetak daftar penumpang</a>
			<table class="table table-striped table-bordered data">
				<thead>
					<tr>
						<th width="10">No</th>
						<th width="30">Kode pemesanan</th>
						<th width="50">Nama penumpang</th>
						<th width="50" style="text-align: center;">Action</th>
					</tr>
				</thead>
				<tbody> ';
					$no = 1;
					foreach ($penumpang as $pnp) {							
			echo 		'<tr>
							<td>'.$no.'</td>
							<td>'.$pnp->kode_pemesanan.'</td>
							<td width="70">'.$pnp->nama_penumpang.'</td>
							<td></td>
						</tr> ';
			$no++;	}
		}
			echo 
				'</tbody>
			</table> 
			';
		}
	}

	public function kuota_penumpang(){
		$data['rute']= $this->m_konsumen->getAllJadwal()->result();
		$data['terminal']=$this->m_konsumen->getData('ms_terminal')->result();
		$this->load->view('admin/kuota_penumpang',$data);

	}

	public function tambahKuota(){
		$id_rute = $this->input->post('rute');
		$kuota = $this->input->post('kuota');
		$tanggal = $this->input->post('tanggal');

		$jml = $this->m_penumpang->getAllKuota()->num_rows();
		$ctr = $jml + 1;
		$cek_kuota = $this->m_penumpang->getAllKuota()->result();

		$id = "KT-".$ctr;
		foreach ($cek_kuota as $key) {
			if ($id_rute == $key->id_rute && $tanggal == $key->tanggal) {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-cross\"></i> Kuota untuk rute dan tanggal sudah tersedia<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
				redirect('c_penumpang/kuota_penumpang');
			}
		}

		$data = array(
				'id_kuota' => $id,
				'id_rute' => $id_rute,
				'tanggal' => $tanggal,
				'kuota' => $kuota
		);

		$result = $this->m_penumpang->tambahKuota($data);

		if ($result == TRUE) {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"fa fa-check\"></i> Kuota penumpang Berhasil Ditambah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		} else {
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"fa fa-check\"></i> Kuota penumpang Gagal Ditambah<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>");
		}	
		redirect('c_penumpang/kuota_penumpang');
	}

	public function carikuotapenumpang($tgl){
		$kuota = $this->m_penumpang->getKuotaPenumpang($tgl)->result();
		$terminal=$this->m_konsumen->getData('ms_terminal')->result();

		if (empty($kuota)) {
		echo 	
			'<table class="table table-striped table-bordered data">
				<td style"text-align:center">
				Kuota Tanggal tersebut belum tersedia
				</td>
			</table>';
		} else {
			echo '
				<table class="table table-striped table-bordered data">
				<thead>
					<tr>
						<th>No</th>
						<th>Terminal asal</th>
						<th>Terminal tujuan</th>
						<th>Jam keberangaktan</th>
						<th>Jam tiba</th>
						<th>Tanggal Keberangkatan</th>
						<th>Kuota</th>
					</tr>
				</thead>
				<tbody> ';
					$no = 1;
					foreach ($kuota as $pnp) {							
		echo '	<tr>
					<td  width="70">'.$no.'</td>';
					foreach ($terminal as $tm) {
						if ($tm->id == $pnp->id_terminal_keberangkatan) {
							$terminalkeberangkatan = $tm->nama_terminal;
						}

						if ($tm->id == $pnp->id_terminal_kedatangan) {
							$terminalkedatangan = $tm->nama_terminal;
						}
					}
		echo '
					<td>'.$terminalkeberangkatan.'</td>
					<td >'.$terminalkedatangan.'</td>
					<td >'.$pnp->jam_keberangkatan.'</td>
					<td >'.$pnp->jam_tiba.'</td>
					<td >'.$pnp->tanggal.'</td>
					<td >'.$pnp->kuota.'</td>
				</tr>';
				$no++; }
					
			echo 	'<tbody>
				</table> 
			';
		}
		}
	
}
?>