<?php

class konsumen extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_konsumen');
		$this->load->model('m_rute');
		$this->load->model('m_bus');
		$this->load->library('upload');
	}

	public function index(){
		$data['kotaasal'] = $this->m_konsumen->getData('ms_terminal')->result();
		//print_r($data['kota']);
		$this->load->view('index', $data);
	}

	public function login(){
		$this->load->view('login');
	}

	public function registrasi(){
		$this->load->view('registrasi');
	}

	public function v_tentang(){
		$this->load->view('tentang');
	}

	public function v_rute(){
		$data['jadwal']= $this->m_konsumen->getAllJadwal()->result();
		$data['terminalasal']=$this->m_konsumen->getData('ms_terminal')->result();
		$data['bus'] = $this->m_bus->getBus()->result();
		$this->load->view('rute',$data);
	}

	public function v_profil(){
		if (!isset($this->session->userdata['logged_in'])) {
			$this->load->view('index');
		} else {
			$where = array(
					'id' => $this->session->userdata['logged_in']['id']
				);
			$data['profil'] = $this->m_konsumen->getDataById('sys_user', $where)->result();
			$this->load->view('profil', $data);
		}
	}

	public function v_editProfil($id){
		if (!isset($this->session->userdata['logged_in'])) {
			$this->load->view('index');
		} else {
			$where = array(
					'id' => $this->session->userdata['logged_in']['id']
				);
			$data['editprofil'] = $this->m_konsumen->getDataById('sys_user', $where)->result();
			$this->load->view('edit_profil', $data);
		}
	}

	public function a_editProfil(){
		$nama = $this->input->post('namalengkap');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$id = $this->input->post('id');

		$dataprofil = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'jenis_kel' => $jeniskelamin,
				'nohp' => $nohp,
				'email' => $email
			);

		$sessiondata = array(
					'id' => $id,
					'nama' => $nama,
					'email' => $email,
					'password' => $this->session->userdata['logged_in']['password'],
					'jeniskelamin' => $jeniskelamin,
					'alamat' => $alamat,
					'nohp' => $nohp,
					'role_id' => $this->session->userdata['logged_in']['role_id']
				);

		$where = array(
				'id' => $id
			);
		$this->session->set_userdata('logged_in',$sessiondata);
		$result = $this->m_konsumen->update($where,$dataprofil,"sys_user");

		if ($result == TRUE) {
			$this->session->set_flashdata('success', 'Edit profil berhasil!');
		} else {
			$this->session->set_flashdata('failed', 'Edit profil gagal!');
		}
		
		if ($id == 13) {
			redirect('c_admin/v_profil');
		} else {	
			redirect('konsumen/v_profil');
		}
	}

	public function v_jadwal(){

		$naikdi = $this->input->post('naikdi');
		$kotatujuan = $this->input->post('kotatujuan');
		$tglkeberangkatan = date('Y-m-d', strtotime($this->input->post('tglkeberangkatan')));


		$rute = $this->m_rute->getRute($kotatujuan,$naikdi)->result();
		$terminal = $this->m_rute->getTerminal()->result();

		foreach ($terminal as $kdt) {
			if ($kdt->id == $naikdi) {
				$id_keberangkatan = $kdt->id;
				$terminal_keberangkatan = $kdt->nama_terminal;				
				$alamat_keberangkatan = $kdt->alamat;				
			} 

			if ($kdt->id == $kotatujuan) {
				$id_kedatangan = $kdt->id;
				$terminal_kedatangan = $kdt->nama_terminal;				
				$alamat_kedatangan = $kdt->alamat;				
			}
		}

		if (empty($rute[0])) {
			redirect('konsumen');
		} else {
			$cekPenumpang = $this->m_rute->cekPenumpang($rute[0]->id_rute,$tglkeberangkatan)->result();
			$data['kursi'] = array();	
			if (empty($cekPenumpang)) {
				
			} else {
				$jmlpenumpang = count($cekPenumpang);
				$x = 0;
				foreach ($cekPenumpang as $cp) {
					$data['kursi'][$x] = $cp->kursi;
					//echo $cp->kursi;
					$x++;
				}
			}
			$data['rute'] = array();
				$i = 0;
				foreach ($rute as $rt) {

					$kuota = $this->m_konsumen->getKuota($tglkeberangkatan,$rt->id_rute)->result();

					foreach ($kuota as $kt) {}

					if (empty($kuota)) {
						

					} else {

						$data['rute'][$i]['id_rute'] = $rt->id_rute;
						$data['rute'][$i]['terminal_keberangkatan'] = $terminal_keberangkatan;
						$data['rute'][$i]['alamat_keberangkatan'] = $alamat_keberangkatan;
						$data['rute'][$i]['terminal_kedatangan'] = $terminal_kedatangan;
						$data['rute'][$i]['alamat_kedatangan'] = $alamat_kedatangan;
						$data['rute'][$i]['jam_keberangkatan'] = $rt->jam_keberangkatan;
						$data['rute'][$i]['estimasiwaktu'] = $rt->estimasiwaktu;
						$data['rute'][$i]['tarif'] = $rt->tarif;
						$data['rute'][$i]['nopol_bus'] = $rt->nopol_bus;
						$data['rute'][$i]['jam_tiba'] = $rt->jam_tiba;
						$data['rute'][$i]['tglkeberangkatan'] = $tglkeberangkatan;
						$data['rute'][$i]['kuota'] = $kt->kuota; 
						$i++;
					}

				}
			$data['databank'] = $this->m_konsumen->getData('ms_bank')->result();
			$this->load->view('jadwal', $data);
			/*echo "<pre>";
			print_r($cekPenumpang);
			echo "</pre>";*/
		}
	}

	public function cetakCheckOut($kode_pemesanan){
		$data['pemesanan'] = $this->m_konsumen->pemesanan($kode_pemesanan)->result();

		//$this->load->view('cetakCheckOut', $data);

		print_r($data['pemesanan']);
	}

	public function a_pemesanan(){


		$cekpemesan = $this->m_konsumen->getData('rel_pemesanan')->num_rows();

		$nomer = $cekpemesan+1;

		$kode_pemesanan = "OD-".$nomer;
		$namalengkap = $this->input->post('namapemesan');
		$email = $this->input->post('email');
		$bank = $this->input->post('bank');
		$hp = $this->input->post('hp');
		$jmlpenumpang = $this->input->post('jmlpenumpang');
		$id_rute = $this->input->post('id_rute');
		$alamat = $this->input->post('alamat');
		$tgl_pemesanan = date('Y-m-d');
		$tgl_keberangkatan = date('Y-m-d', strtotime($this->input->post('tglkeberangkatan')));
		$tgl_expired = date('Y-m-d', strtotime('+2 days', strtotime($tgl_pemesanan)));
		$status = "0";
		$tgl_keberangkatan = $this->input->post('tglkeberangkatan');

		$totalHarga = 0;

		for ($x=0; $x < $jmlpenumpang ; $x++) { 
			$harga = array(
					'harga' => $_POST['harga'][$x]
				);
			$totalHarga = $totalHarga + $harga['harga'];
		
		}

		$datapemesan = array(
				'kode_pemesanan' => $kode_pemesanan,
				'nama_pemesan' => $namalengkap,
				'alamat' => $alamat,
				'email' => $email,
				'nohp' => $hp,
				'totalHarga' => $totalHarga,
				'ms_bank_id' => $bank,
				'id_rute'=> $id_rute,
				'tgl_pemesanan' => $tgl_pemesanan,
				'tgl_expired' => $tgl_expired,
				'status'=> $status,
				'tgl_keberangkatan' => $tgl_keberangkatan
			);

		$this->m_konsumen->insert('rel_pemesanan',$datapemesan);

		$kuota = $this->m_konsumen->getKuota($tgl_keberangkatan,$id_rute)->result();
		$kuota_baru = $kuota[0]->kuota - $jmlpenumpang;
		
		$data = array(
				'kuota' => $kuota_baru
		);

		$update_kuota = $this->m_konsumen->updatekuota($kuota[0]->id_kuota, $data);


		for ($i=0; $i < $jmlpenumpang ; $i++) { 
			if ($_POST['kursi'] < 10) {
				$datapenumpang = array(
					'nama_penumpang' => $_POST['namalengkap'][$i],
					'kursi' => '0'+$_POST['kursi'][$i],
					'kode_pemesanan' => $kode_pemesanan
				);
				$this->m_konsumen->insert('rel_penumpang',$datapenumpang);

			} else {
				$datapenumpang = array(
					'nama_penumpang' => $_POST['namalengkap'][$i],
					'kursi' => $_POST['kursi'][$i],
					'kode_pemesanan' => $kode_pemesanan
				);
				$this->m_konsumen->insert('rel_penumpang',$datapenumpang);

			}
		}
		
		//print_r($datapemesan);
		//print_r($datapenumpang);
		$data['detaildata'] = $this->m_konsumen->checkout($kode_pemesanan)->result();
		$data['databank'] = $this->m_konsumen->getDataById('ms_bank',$where = array('id' => $bank))->result();
		//print_r($data['detaildata']);
		$this->load->view('checkout', $data);
		//print_r($data['databank']);
	}

	public function a_pembayaran($type){
		if ($type == "Bank") {
			$idbank = $this->input->post('bank');
			$kode_pemesanan = $this->input->post('kode_pemesanan');

			$dataidbank = array(
					'ms_bank_id' => $idbank
				);

			$where = array(
					'kode_pemesanan' =>$kode_pemesanan
				);

			$this->m_konsumen->update($where,$dataidbank,'rel_pemesanan');
		}

		redirect('index.php');
	}

	public function cek_pemesanan(){
		$this->load->view('cek_pemesanan');
	}

	public function upload_buktiPembayaran(){
		$kode_pemesanan = $this->input->post('kode_pemesanan');
		$tglpembayaran = date('Y-m-d');

		$config['upload_path'] = './assets/images/bukti_pembayaran/';
		$config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG|gif|GIF';
		$config['max_size']	= '100000'; //in kb
        $this->upload->initialize($config);

        if (! $this->upload->do_upload('buktipembayaran')) {
            echo $this->upload->display_errors();
	    } else {

	    	$cekpemesan = $this->m_konsumen->getData('rel_pembayaran')->result();

	    	foreach ($cekpemesan as $key) {
	    		if ($key->rel_pemesanan_kode == $kode_pemesanan) {
	    			$status = 1;
	    			$kode_pembayaran = $key->kode_pembayaran;
	    			print_r($kode_pembayaran);
	    		} else {
	    			$status = 2;
	    		}
	    	} 

	    	$wherepemesanan = array(
	    		'kode_pemesanan' => $kode_pemesanan
	    	);

	    	$statuspemesanan = array(
	    		'status' => 5
	    	);

    		$result = $this->m_konsumen->update($wherepemesanan, $statuspemesanan, 'rel_pemesanan');


	    	if ($status == 1) {

	    		$where = array(
	    			'kode_pembayaran' => $kode_pembayaran
	    		);

	    		$datapembayaran=array(
	    			'rel_pemesanan_kode' => $kode_pemesanan,
	    			'bukti_pembayaran' => $this->upload->data('file_name'),
	    			'tgl_pembayaran' => $tglpembayaran
	    		);

	    		$result = $this->m_konsumen->update($where, $datapembayaran, 'rel_pembayaran');

	    	} elseif ($status == 2) {
	    		$datapembayaran=array(
	    			'rel_pemesanan_kode' => $kode_pemesanan,
	    			'bukti_pembayaran' => $this->upload->data('file_name'),
	    			'tgl_pembayaran' => $tglpembayaran
	    		);

	    		$result = $this->m_konsumen->insert('rel_pembayaran',$datapembayaran);
	    	}

	    	if ($result == TRUE) {
			$this->session->set_flashdata('success', 'Upload bukti pembayaran berhasil!');
			} else {
				$this->session->set_flashdata('failed', 'Upload bukti pembayaran gagal!');
			}

	    	redirect('konsumen/cek_pemesanan');
	    }
	}

	public function batalPemesanan(){
		$kode_pemesanan = $this->input->post('kode_pemesanan');

		$dataupdate = array(
				'status' => 2
			);

		$where = array(
				'kode_pemesanan' => $kode_pemesanan
			);

		$result = $this->m_konsumen->update($where,$dataupdate,'rel_pemesanan');

		if ($result == TRUE) {
			$this->session->set_flashdata('success', 'Pemesanan berhasil dibatalkan!');	 
		} else {
			$this->session->set_flashdata('failed', 'Pembatalan gagal!');	
		}

		redirect('konsumen/cek_pemesanan');
	}

	public function a_konfirmasi_pemesanan(){
		$kode_pemesanan = $this->input->post('idorder');

		$detaildata = $this->m_konsumen->pemesanan($kode_pemesanan)->result();
		$no = 1;
		$totalHarga = 0;


		/*print_r($data['detaildata']);*/

		if (empty($detaildata)) {
		echo '
			<div class="col-md-12" style="text-align:center">
				<h1>Pemesanan tidak ditemukan</h1>
			</div>
		';
			
		} else {

		foreach ($detaildata as $key) {
		}

		echo '
				<div class="col-md-6">
				<h5>Data Pemesan</h5>
					<div style="border: 10px; margin:12px">
						<div>
							<span style="font-size: 13px">Id Pemesananan &nbsp&nbsp:</span>
							<span>'.$key->kode_pemesanan.'</span>
						</div>
						<div>
							<span style="font-size: 13px">Nama Pemesan &nbsp&nbsp&nbsp&nbsp:</span>
							<span>'.$key->nama_pemesan.'</span>
						</div>
						<div>
							<span style="font-size: 13px">Alamat Pemesan &nbsp&nbsp:</span>
							<span>'.$key->alamat.'</span>
						</div>
						<div>
							<span style="font-size: 13px">Email Pemesan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span>
							<span>'.$key->email.'</span>
						</div>
						<div>
							<span style="font-size: 13px">No Telp Pemesan &nbsp&nbsp:</span>
							<span>'.$key->nohp.'</span>
						</div>
					</div>
					<h5>Data Penumpang</h5> ';

		foreach ($detaildata as $row ) {
		echo '
					<div style="margin: 12px">
						<div>
							<span>'. $no.' </span>
							<span style="font-size: 13px">Nama Penumpang &nbsp&nbsp:</span>
							<span>'.$row->nama_penumpang.'</span>
						</div>
						<div>
							<span style="font-size: 13px">&nbsp&nbsp No Kursi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</span>
							<span>'.$row->kursi.'</span>
						</div>
					</div>';
			$no++;
			$totalHarga = $totalHarga + $row->tarif;
		}

		echo '		<h5>Harga</h5>
					<div style="margin: 12px">
						<div>
							<span style="font-size: 13px">Total Harga &nbsp&nbsp:</span>
							<span>Rp '.$totalHarga.' </span>
						</div>	
					</div>
					<h5>Bank</h5>
					<div style="margin: 12px">
						<div>
							<img src='.base_url().'assets/images/logo_bank/'.$key->logo.'>
							<span>No Rek : '.$key->nomor_rekening.' / A.N. '.$key->atas_nama.'</span>
						</div>	
					</div>
					<h5>Status</h5>
						<div style="margin: 12px">';

					$tgl_sekarang = date('Y-m-d');
					if ($tgl_sekarang >= $key->tgl_expired) {
					

		echo '		<span class="btn btn-danger">EXPIRED</span> 
					</div>

					';


					}else if ($key->status == "1") {

		echo '		<span class="btn btn-success">Lunas</span> 
					</div>
					

					';

					} elseif ($key->status == "0") {

		echo '		<span class="btn btn-danger">Belum Lunas</span> 
					</div>
					<div>
						<button class="link-btn" style="float: right;" data-target=".batalkan" data-toggle="modal" >Batalkan</button>
					</div>
					<div>
						<button class="link-btn" style="float: right;" data-target="#uploadbukti" data-toggle="collapse" >Upload Bukti</button>
					</div>
					';
				    } elseif ($key->status == "2") {
		echo '		<span class="btn btn-danger">Dibatalkan</span> 
					</div>

					';

					} elseif ($key->status == "3") {
		echo '		<span class="btn btn-danger">Bukti pembayaran tidak sesuai, silahkan upload ulang</span>
					</div>
					<div>
						<button class="link-btn" style="float: right;" data-target=".batalkan" data-toggle="modal" >Batalkan</button>
					</div>
					<div>
						<button class="link-btn" style="float: right;" data-target="#uploadbukti" data-toggle="collapse" >Upload Bukti</button>
					</div>
					'
					;			
					} elseif ($key->status == 5) {
		echo '		<span class="btn btn-info">Proses Validasi</span>
					</div>
					';				
					}
		echo '		
					</div>

					<div class="col-md-6 collapse" id="uploadbukti">
						<h5>Upload Bukti Pembayaran</h5>
							<div style="border: 10px; margin:12px">
							<form action="'.base_url().'/konsumen/upload_buktiPembayaran" method="POST" enctype="multipart/form-data">
								<input type="file" name="buktipembayaran" class="form-control" >
								<input type="hidden" name="kode_pemesanan" value="'.$key->kode_pemesanan.'" class="form-control" >
								<button style="margin:5px;float: right;" class="link-btn"type="submit">Upload</button>
							</form>
							</div>
					</div>

					<div class="modal fade batalkan">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Anda yakin anda membatalkan pemesanan ini?</h4>	
							</div>
								<form method="POST" action="'.base_url().'/konsumen/batalPemesanan">
								<input type="hidden" name="kode_pemesanan" value="'.$key->kode_pemesanan.'" class="form-control" ></input>

							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
								</form>
							</div>					
						</div>
					</div>


		';
		}
	}
}