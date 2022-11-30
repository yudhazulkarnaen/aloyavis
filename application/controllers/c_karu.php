<?php

class C_karu extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		if (!isset($this->session->userdata['nama'])){
			redirect('');
		}
		if ($this->session->userdata['role'] == 1){
			redirect('c_serviceadvisor');
		}
		if ($this->session->userdata['role'] == 3){
			redirect('c_manager');
		}
        $this->load->helper(array('form'));
		$this->load->model('m_data');
        $this->load->library(array('form_validation'));
	}

	public function index()
	{
		$this->load->view('home (karu)');
	}

	function gantipassword()
    {
		$this->form_validation->set_rules('oldpassword', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password Baru', 'required|trim|matches[password2]');
		$this->form_validation->set_rules('password2', 'Ulangi Password Baru', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false) {
			$this->load->view('ganti password(karu)');
		} else {
			$username = $this->session->userdata('username');
			$password = $this->input->post('oldpassword');
			$newpassword = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);

			$user = $this->db->get_where('users', ['username' => $username])->row_array();

			if (password_verify($password, $user['password'])){
				$data = [
                        'password' => $newpassword,
                    ];
                $where = array(
                        'username' => $this->session->userdata('username')
                );

                $this->db->where($where);
                $this->db->update("users", $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your password has been successfully changed!</div>');
				redirect('c_karu/gantipassword');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong old password!</div>');
				redirect('c_karu/gantipassword');
			}
		}
    }

	function profil()
    {
		$username = $this->session->userdata('username');
		$this->db->select('*');
       	$this->db->from('users');
      	$this->db->where('username', $username);
		$query = $this->db->get();
		$data['res'] = $query->row_array();

		$this->load->view('profil(karu)', $data);
    }

	function monitoringservis()
    {
		$nomorpitstop = $this->session->userdata['nomor_pitstop'];
		$harus_tasklist = $this->db->get_where('antrian', ['no_antrian' => $nomorpitstop, 'status' => "task list"])->row_array();
		$harus_qmc = $this->db->get_where('antrian', ['no_antrian' => $nomorpitstop, 'status' => "quick maintenance checksheet"])->row_array();
		$harus_cuci = $this->db->get_where('antrian', ['no_antrian' => $nomorpitstop, 'status' => "cuci kendaraan"])->row_array();
		
		if($harus_tasklist){
			$platnomor = $harus_tasklist['plat_nomor'];
			redirect('c_karu/tasklist/'.$platnomor);
		}
		if($harus_qmc){
			$platnomor = $harus_qmc['plat_nomor'];
			redirect('c_karu/formqmc/'.$platnomor);
		}
		if($harus_cuci){
			$platnomor = $harus_cuci['plat_nomor'];
			redirect('c_karu/cucikendaraan/'.$platnomor);
		}

		$nomorpitstop = $this->session->userdata['nomor_pitstop'];
		$this->db->select('*');
		$this->db->from('sedang_servis');
        $this->db->join('antrian', 'antrian.plat_nomor = sedang_servis.nomor_polisi');
        $this->db->where('nomor_pitstop', $nomorpitstop);
		$query = $this->db->get();
        $data['res'] = $query->row_array();

		$jamservis = $query->row_array();
		if($jamservis){
			$variabelestimasi = $jamservis['jam_servis'];
			$timestamp = strtotime("$variabelestimasi") + 60*60;
			$data['estimasiselesai'] = date('H:i:s', $timestamp);
		}
		
		$this->load->view('info servis & kendaraan(karu)', $data);
    }

	public function get_servis()
	{
		$data = $this->m_data->get_sedang_servis()->result();
		echo json_encode($data);
	}

	public function get_history_part($platnomor)
	{
		$data = $this->m_data->get_history_part($platnomor)->result();
		echo json_encode($data);
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('nip');
		$this->session->unset_userdata('handphone');
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('teknisi_a');
		$this->session->unset_userdata('teknisi_b');
		$this->session->unset_userdata('nomor_pitstop');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been logout.</div>');
		redirect('');
	}

	public function infokendaraan($platnomor){
		$this->db->select('*');
		$this->db->from('mobil');
        $this->db->where('nomor_polisi', $platnomor);
		$query = $this->db->get();
        $data['res'] = $query->row_array();
		$this->load->view('infokendaraan(karu)', $data);
	}

	public function infopemeriksaan($platnomor)
	{
		$tglservis = date("Y-m-d");
		$this->db->select('*');
		$this->db->from('history_pemeriksaan');
        $this->db->where('nomor_polisi_pemeriksaan', $platnomor);
		$this->db->where('tgl_servis',$tglservis);
		$query = $this->db->get();
        $data['res'] = $query->row_array();

		$this->load->view('info pemeriksaan(karu)', $data);
	}

	public function infoworkorder($platnomor)
	{
		$id = $platnomor." - ".date("Y-m-d");
		$this->db->select('*');
		$this->db->from('history_workorder');
        $this->db->where('id_history_workorder', $id);
		$query = $this->db->get();
		$data['res'] = $query->row_array();

		$dataworkorder = $query->row_array();
		$idworkorder = $dataworkorder['paket_servis_wo'];
		// $result = $query->row();
		// $datacek= $result->paket_servis_wo;
		$this->db->select('*');
		$this->db->from('servis');
        $this->db->where('id_servis', $idworkorder);
		$query2 = $this->db->get();
		$data['res2'] = $query2->row_array();

		$this->db->select('*');
		$this->db->from('history_part');
        $this->db->where('id_history_part', $id);
		$data['part'] = $this->db->get()->result_array();

		$this->load->view('info workorder (karu)', $data);
	}

	function tasklist($platnomor)
	{
		$nomorpitstop = $this->session->userdata['nomor_pitstop'];
		$harus_qmc = $this->db->get_where('antrian', ['no_antrian' => $nomorpitstop, 'status' => "quick maintenance checksheet"])->row_array();
		$harus_cuci = $this->db->get_where('antrian', ['no_antrian' => $nomorpitstop, 'status' => "cuci kendaraan"])->row_array();
		
		if($harus_qmc){
			redirect('c_karu/formqmc/'.$platnomor);
		}
		if($harus_cuci){
			redirect('c_karu/cucikendaraan/'.$platnomor);
		}

		$this->form_validation->set_rules('keluhan', 'Keluhan', 'required');

		if ($this->form_validation->run() == false) {
			// $data['res3'] = $this->db->get_where('request_part', ['plat_nomor_request' => $platnomor])->result_array();
			// $data['res5'] = $this->db->get_where('request_part', ['plat_nomor_request' => $platnomor])->row_array();
			// $data['res4'] = $this->db->get_where('sedang_servis', ['plat_nomor_servis' => $platnomor])->row_array();
			
			$adarequest = $this->db->get_where('request_part', ['plat_nomor_request' => $platnomor,])->result_array();
			if($adarequest){
				$data['adarequest'] = "benar";
			}else{
				$data['adarequest'] = "salah";
			}

			$nomorpitstop = $this->session->userdata['nomor_pitstop'];
			$data2 = [
				'status' => "task list",
			];
			$this->db->where('no_antrian', $nomorpitstop);
			$this->db->update('antrian', $data2);
			
			$id = $platnomor." - ".date("Y-m-d");
			$this->db->select('*');
			$this->db->from('history_workorder');
			$this->db->where('id_history_workorder', $id);
			$query = $this->db->get();
			$data['res'] = $query->row_array();

			$result = $query->row();
			$datacek= $result->paket_servis_wo;
			$this->db->select('*');
			$this->db->from('servis');
			$this->db->where('id_servis', $datacek);
			$query2 = $this->db->get();
			$data['res2'] = $query2->row_array();

			$this->db->select('*');
			$this->db->from('request_part');
			$this->db->where('plat_nomor_request', $platnomor);
			$query3 = $this->db->get();
			$data['res3'] = $query3->result_array();

			$this->db->select('catatan_karu');
			$this->db->from('sedang_servis');
			$this->db->where('nomor_polisi', $platnomor);
			$query4 = $this->db->get();
			$data['res4'] = $query4->row_array();

			$this->load->view('pengerjaan task list(karu)', $data);
		} else {

			$id = $platnomor." - ".date("Y-m-d");
			$data = [
				'id' => $id,
				'olimesin' => $this->input->post('olimesin', true),
				'olifilter' => $this->input->post('olifilter', true),
				'saringanudara' => $this->input->post('saringanudara', true),
				'keregangankatup' => $this->input->post('keregangankatup', true),
				'saringanbensin' => $this->input->post('saringanbensin', true),
				'busitipenikel' => $this->input->post('busitipenikel', true),
				'busitipeiridium' => $this->input->post('busitipeiridium', true),
				'drivebelt' => $this->input->post('drivebelt', true),
				'kecepatanstasioner' => $this->input->post('kecepatanstasioner', true),
				'radiatorcoolant' => $this->input->post('radiatorcoolant', true),
				'olitransmisi' => $this->input->post('olitransmisi', true),
				'enginecleaner' => $this->input->post('enginecleaner', true),
				'remdepanbelakang' => $this->input->post('remdepanbelakang', true),
				'fluidarem' => $this->input->post('fluidarem', true),
				'remparkir' => $this->input->post('remparkir', true),
				'saringanac' => $this->input->post('saringanac', true),
				'rotasiban' => $this->input->post('rotasiban', true),
				'pintugeserlistrik' => $this->input->post('pintugeserlistrik', true),
				'tierods' => $this->input->post('tierods', true),
				'komponensuspensi' => $this->input->post('komponensuspensi', true),
				'bootsdriveshaft' => $this->input->post('bootsdriveshaft', true),
				'selangrempipa' => $this->input->post('selangrempipa', true),
				'semuaketinggianlevel' => $this->input->post('semuaketinggianlevel', true),
				'sistempembuangan' => $this->input->post('sistempembuangan', true),
				'selangbensin' => $this->input->post('selangbensin', true),
				'keluhan' => $this->input->post('keluhan', true),
				'catatan_tasklist' => $this->input->post('catatan', true),
			];
			$this->db->insert('history_tasklist', $data);

			$data2 = [
				'status' => "quick maintenance checksheet",
			];
			$this->db->where('plat_nomor', $platnomor);
			$this->db->update('antrian', $data2);

			$jumlah = count($this->input->post('namaparts'));
			for($i=0;$i<$jumlah;$i++){
				$z = $i+1;
				$namapart = $this->input->post('namaparts', true)[$i];
				$status = $this->input->post('namaparts'.$z, true);
				$this->db->query('
				UPDATE history_part
				SET status = "'.$status.'"
				WHERE nama_part = "'.$namapart.'" AND id_history_part = "'.$id.'";');
			}
			

			redirect('c_karu/formqmc/'.$platnomor);
		}
	}

	public function getParts()
	{
		$name = $this->input->get('name');
		$fieldName = $this->input->get('fieldName');

		$parts = $this->m_data->getParts($name, $fieldName);
		echo json_encode($parts);exit;
	}

	public function sendPartRequest(){
		// $jumlah = count($this->input->post('namapartsrequest'));
		// $nomorpolisi = $this->input->post('nomorpolisi', true);
		// $id = $nomorpolisi." ".date("Y-m-d");
		// for($i=0;$i<$jumlah;$i++){
		// 	$data1 = array(
		// 		'id'=> $id,
		// 		'nama_part'=> $nama_part,
		// 		'no_polisi_part' => $nomorpolisi
		// 	);
		// }
		// $hasil = $this->db->insert("request_part",$data1);

		// $kobar=$this->input->post('kobar');
        $nama_part=$this->input->post('nama_parts');
		$harga=$this->input->post('harga');
		$nomorpolisi=$this->input->post('nomorpolisi');
		$jumlah = count($this->input->post('harga'));
		// $goo =  $nama_part[0];
		// implode(" ",$nama_part);
        

		for($i=0;$i<$jumlah;$i++){
			$goo =  $nama_part[$i];
			$gooo =  $harga[$i];
			$data=$this->m_data->pusyang($goo,$nomorpolisi,$gooo);
		}

		$data2 = [
			'catatan_karu' => $this->input->post('catatankaru'),
			'request_karu' => "ADA REQUEST"
		];
		$this->db->where('nomor_polisi', $nomorpolisi);
		$this->db->update('sedang_servis', $data2);

		require APPPATH . 'views/vendor/autoload.php';

  		$options = array(
			'cluster' => 'ap1',
			'useTLS' => true
		);
		$pusher = new Pusher\Pusher(
			'a902db797c535c945df3',
			'12d83dd021e62d0e486e',
			'1490331',
			$options
		);

		$data4['message'] = "request";
		$pusher->trigger('my-channel', 'my-event', $data4);

        echo json_encode($data);
	}

	public function formqmc($platnomor){

		$this->form_validation->set_rules('dk_a_1', 'Bekerja NORMAL', 'required');
		$this->form_validation->set_rules('dk_a_2', 'Gerakan Wiper', 'required');
		$this->form_validation->set_rules('dk_a_3', 'Arah dan Banyaknya Semprotan Air', 'required');
		$this->form_validation->set_rules('dk_a_4', 'Operasi dan Suara', 'required');
		$this->form_validation->set_rules('dk_a_5', 'Power Window', 'required');
		$this->form_validation->set_rules('dk_a_6', 'Power Dock Lock', 'required');
		$this->form_validation->set_rules('dk_a_7', 'Power Mirror', 'required');
		$this->form_validation->set_rules('dk_a_8', 'Canceller Lampu Sein', 'required');
		$this->form_validation->set_rules('dk_a_9', 'A/C', 'required');
		$this->form_validation->set_rules('dk_a_10', 'Lampu Interior', 'required');
		$this->form_validation->set_rules('dk_a_11', 'Sun Roof', 'required');
		$this->form_validation->set_rules('dk_a_12', 'Power Sliding Door', 'required');
		$this->form_validation->set_rules('dk_a_13', 'Tekanan Angin Ban "Depan Kanan"', 'required');
		$this->form_validation->set_rules('dk_a_14', 'Tekanan Angin Ban "Depan Kiri"', 'required');
		$this->form_validation->set_rules('dk_a_15', 'Tekanan Angin Ban "Belakang Kanan"', 'required');
		$this->form_validation->set_rules('dk_a_16', 'Tekanan Angin Ban "Belakang Kiri"', 'required');
		$this->form_validation->set_rules('dk_a_17', 'Tekanan Angin Ban Cadangan', 'required');
		$this->form_validation->set_rules('dk_a_18', 'Pemeriksaan Kebocoran', 'required');
		$this->form_validation->set_rules('dk_a_19', 'Gerak Bebas Pedal', 'required');
		$this->form_validation->set_rules('dk_a_20', 'Putaran dan Gerak Bebas', 'required');
		$this->form_validation->set_rules('dk_a_21', 'Jumlah Klik', 'required');
		$this->form_validation->set_rules('dk_a_22', 'Ganti', 'required');
		$this->form_validation->set_rules('rm_b_1', 'Lampu Bagian Depan', 'required');
		$this->form_validation->set_rules('rm_b_2', 'Lampu Bagian Belakang', 'required');
		$this->form_validation->set_rules('rm_b_3', 'Karet Wiper', 'required');
		$this->form_validation->set_rules('rm_b_4', 'Oli Power Steering', 'required');
		$this->form_validation->set_rules('rm_b_5', 'Minyak Rem', 'required');
		$this->form_validation->set_rules('rm_b_6', 'Radiator Coolant', 'required');
		$this->form_validation->set_rules('rm_b_7', 'Air Wiper', 'required');
		$this->form_validation->set_rules('rm_b_8', 'Oli Mesin', 'required');
		$this->form_validation->set_rules('rm_b_9', 'Oli Transmisi 	', 'required');
		$this->form_validation->set_rules('rm_b_10', 'Retak, Rusak, Kekencangan', 'required');
		$this->form_validation->set_rules('rm_b_11', 'Depan Kanan', 'required');
		$this->form_validation->set_rules('rm_b_12', 'Belakang Kanan', 'required');
		$this->form_validation->set_rules('rm_b_13', 'Depan Kiri', 'required');
		$this->form_validation->set_rules('rm_b_14', 'Belakang Kiri', 'required');
		$this->form_validation->set_rules('rm_b_15', 'Karat', 'required');
		$this->form_validation->set_rules('rm_b_16', 'Kekencangan Terminal', 'required');
		$this->form_validation->set_rules('rm_b_17', 'Indicator Cairan', 'required');
		$this->form_validation->set_rules('rm_b_18', 'Cover Cylinder Head', 'required');
		$this->form_validation->set_rules('rm_b_19', 'Master Cylinder Rem', 'required');
		$this->form_validation->set_rules('rm_b_20', 'Pompa Power Steering', 'required');
		$this->form_validation->set_rules('rm_b_21', 'Radiator', 'required');
		$this->form_validation->set_rules('rm_b_22', 'Bersihkan', 'required');
		$this->form_validation->set_rules('rm_b_23', 'Ganti', 'required');
		$this->form_validation->set_rules('rm_b_24', 'Ganti', 'required');
		$this->form_validation->set_rules('rm_b_25', 'Pasang Brake Bleeder', 'required');
		$this->form_validation->set_rules('pmt_a_1', 'Robek, Retak, Aus Tidak Merata, Bulging', 'required');
		$this->form_validation->set_rules('pmt_a_2', 'Pemeriksaan Bearing Roda', 'required');
		$this->form_validation->set_rules('pmt_a_3', 'Rem, Macet atau Tidak', 'required');
		$this->form_validation->set_rules('pmt_a_4', 'Retak, Aus Tidak Merata', 'required');
		$this->form_validation->set_rules('pmt_a_5', 'Bersihkan', 'required');
		$this->form_validation->set_rules('pmt_a_6', 'Beri Grease', 'required');
		$this->form_validation->set_rules('pmt_a_7', 'Ketebalan Pad / Shoe Kanan', 'required');
		$this->form_validation->set_rules('pmt_a_8', 'Ketebalan Pad / Shoe Kiri', 'required');
		$this->form_validation->set_rules('pmt_a_9', 'Retak, Aus Tidak Merata', 'required');
		$this->form_validation->set_rules('pmt_a_10', 'Baut Kaliper => Torsi', 'required');
		$this->form_validation->set_rules('pmt_a_11', 'Robek / Retak / Penyok', 'required');
		$this->form_validation->set_rules('pmt_a_12', 'Retak, Rusak', 'required');
		$this->form_validation->set_rules('pmt_a_13', 'Kebocoran Oli', 'required');
		$this->form_validation->set_rules('pmt_a_14', 'Joint Knuckle', 'required');
		$this->form_validation->set_rules('pmt_a_15', 'Joint Stabilizer', 'required');
		$this->form_validation->set_rules('pmt_a_16', 'Joint Tie Rod', 'required');
		$this->form_validation->set_rules('pmt_a_17', 'Depan <=> Belakang', 'required');
		$this->form_validation->set_rules('pmt_a_18', 'Bleeding Rem Semua Roda', 'required');
		$this->form_validation->set_rules('pmt_b_1', 'Robek, Retak, Aus Tidak Merata, Bulging', 'required');
		$this->form_validation->set_rules('pmt_b_2', 'Pemeriksaan Bearing Roda', 'required');
		$this->form_validation->set_rules('pmt_b_3', 'Rem, Macet atau Tidak', 'required');
		$this->form_validation->set_rules('pmt_b_4', 'Retak, Aus Tidak Merata', 'required');
		$this->form_validation->set_rules('pmt_b_5', 'Bersihkan', 'required');
		$this->form_validation->set_rules('pmt_b_6', 'Beri Grease', 'required');
		$this->form_validation->set_rules('pmt_b_7', 'Ketebalan Pad / Shoe Kanan', 'required');
		$this->form_validation->set_rules('pmt_b_8', 'Ketebalan Pad / Shoe Kiri', 'required');
		$this->form_validation->set_rules('pmt_b_9', 'Retak, Aus Tidak Merata', 'required');
		$this->form_validation->set_rules('pmt_b_10', 'Baut Kaliper => Torsi', 'required');
		$this->form_validation->set_rules('pmt_b_11', 'Robek / Retak / Penyok', 'required');
		$this->form_validation->set_rules('pmt_b_12', 'Retak, Rusak', 'required');
		$this->form_validation->set_rules('pmt_b_13', 'Kebocoran Oli', 'required');
		$this->form_validation->set_rules('pmt_b_14', 'Joint Knuckle', 'required');
		$this->form_validation->set_rules('pmt_b_15', 'Joint Stabilizer', 'required');
		$this->form_validation->set_rules('pmt_b_16', 'Joint Tie Rod', 'required');
		$this->form_validation->set_rules('pmt_b_17', 'Depan <=> Belakang', 'required');
		$this->form_validation->set_rules('pma_a_1', 'Gerakan, Rusak', 'required');
		$this->form_validation->set_rules('pma_a_2', 'Baut Kaliper', 'required');
		$this->form_validation->set_rules('pma_a_3', 'Baut Suspensi', 'required');
		$this->form_validation->set_rules('pma_a_4', 'Baut Arm, Mounting', 'required');
		$this->form_validation->set_rules('pma_a_5', 'Retak, Bocor', 'required');
		$this->form_validation->set_rules('pma_a_6', 'Retak, Bocor', 'required');
		$this->form_validation->set_rules('pma_a_7', 'Mounting (Retak, Rusak)', 'required');
		$this->form_validation->set_rules('pma_a_8', 'Kekencangan Baut - Baut', 'required');
		$this->form_validation->set_rules('pma_a_9', 'Bunyi Dalam Knalpot', 'required');
		$this->form_validation->set_rules('pma_a_10', 'Bocor, Rusak', 'required');
		$this->form_validation->set_rules('pma_b_1', 'Oli Mesin', 'required');
		$this->form_validation->set_rules('pma_b_2', 'Oli Transmisi', 'required');
		$this->form_validation->set_rules('pma_b_3', 'Air Radiator', 'required');
		$this->form_validation->set_rules('pma_b_4', 'Oli Filter => Torsi', 'required');
		$this->form_validation->set_rules('pma_b_5', 'Washer Drain (Mesin/Transmisi) => Torsi', 'required');
		$this->form_validation->set_rules('pma_b_6', 'Oli Mesin', 'required');
		$this->form_validation->set_rules('pma_b_7', 'Oli Transmisi', 'required');
		$this->form_validation->set_rules('pma_b_8', 'Oli Power Steering', 'required');
		$this->form_validation->set_rules('pma_b_9', 'Air Radiator', 'required');
		$this->form_validation->set_rules('pmb_a_1', 'Torsi', 'required');
		$this->form_validation->set_rules('pmb_a_2', 'Vaccum Interior Mobil', 'required');
		$this->form_validation->set_rules('pmb_a_3', 'Sampai Kipas Menyala', 'required');
		$this->form_validation->set_rules('pmb_a_4', 'Matikan Mesin', 'required');
		$this->form_validation->set_rules('pmb_a_5', 'Check Gearshift', 'required');
		$this->form_validation->set_rules('pmb_a_6', 'Ganti Filter Bensin', 'required');
		$this->form_validation->set_rules('pmb_b_1', 'Lepaskan Brake Bleeder', 'required');
		$this->form_validation->set_rules('pmb_b_2', 'Oli Mesin', 'required');
		$this->form_validation->set_rules('pmb_b_3', 'Oli Transmisi', 'required');
		$this->form_validation->set_rules('pmb_b_4', 'Air Radiator (Tabung Cadangan)', 'required');
		$this->form_validation->set_rules('pmb_b_5', 'Isi Air Radiator', 'required');
		$this->form_validation->set_rules('pmb_b_6', 'Beban / Pengisian (Dengan Multimeter)', 'required');
		$this->form_validation->set_rules('pmb_b_7', 'Setel Katup', 'required');
		$this->form_validation->set_rules('pma2_a_1', 'Kebocoran Pipa A, B & Knalpot', 'required');
		$this->form_validation->set_rules('pma2_b_1', 'Drain Bolt Oli Mesin / Transmisi', 'required');
		$this->form_validation->set_rules('pma2_b_2', 'Oli Filter', 'required');
		$this->form_validation->set_rules('pmb2_b_1', 'Oli Mesin 	', 'required');
		$this->form_validation->set_rules('pmb2_b_2', 'Oli Transmisi (Dipstick)', 'required');
		$this->form_validation->set_rules('pma3_b_1', 'Oli Transmisi (HCF2)', 'required');

		$nomorpitstop = $this->session->userdata['nomor_pitstop'];
		$harus_servis = $this->db->get_where('antrian', ['no_antrian' => $nomorpitstop, 'status' => "penyerahan work order"])->row_array();
		$harus_tasklist = $this->db->get_where('antrian', ['no_antrian' => $nomorpitstop, 'status' => "task list"])->row_array();
		$harus_cuci = $this->db->get_where('antrian', ['no_antrian' => $nomorpitstop, 'status' => "cuci kendaraan"])->row_array();
		
		if($harus_servis){
			redirect('c_karu/monitoringservis');
		}
		if($harus_tasklist){
			redirect('c_karu/tasklist/'.$platnomor);
		}
		if($harus_cuci){
			redirect('c_karu/cucikendaraan/'.$platnomor);
		}

		if ($this->form_validation->run() == false) {
			$adarequest = $this->db->get_where('request_part', ['plat_nomor_request' => $platnomor,])->result_array();
			if($adarequest){
				$data['adarequest'] = "benar";
			}else{
				$data['adarequest'] = "salah";
			}

			$id = $platnomor." - ".date("Y-m-d");
			$this->db->select('*');
			$this->db->from('history_workorder');
			$this->db->where('id_history_workorder', $id);
			$query = $this->db->get();
			$data['res'] = $query->row_array();

			$this->db->select('*');
			$this->db->from('request_part');
			$this->db->where('plat_nomor_request', $platnomor);
			$query3 = $this->db->get();
			$data['res3'] = $query3->result_array();

			$this->db->select('catatan_karu');
			$this->db->from('sedang_servis');
			$this->db->where('nomor_polisi', $platnomor);
			$query4 = $this->db->get();
			$data['res4'] = $query4->row_array();

			$this->load->view('pengerjaan qmc', $data);
		} else {
			$id = $platnomor." - ".date("Y-m-d");
			$data = [
				'id' => $id,
				'dk_a_1' => $this->input->post('dk_a_1', true),
				'dk_a_2' => $this->input->post('dk_a_2', true),
				'dk_a_3' => $this->input->post('dk_a_3', true),
				'dk_a_4' => $this->input->post('dk_a_4', true),
				'dk_a_5' => $this->input->post('dk_a_5', true),
				'dk_a_6' => $this->input->post('dk_a_6', true),
				'dk_a_7' => $this->input->post('dk_a_7', true),
				'dk_a_8' => $this->input->post('dk_a_8', true),
				'dk_a_9' => $this->input->post('dk_a_9', true),
				'dk_a_10' => $this->input->post('dk_a_10', true),
				'dk_a_11' => $this->input->post('dk_a_11', true),
				'dk_a_12' => $this->input->post('dk_a_12', true),
				'dk_a_13' => $this->input->post('dk_a_13', true),
				'dk_a_14' => $this->input->post('dk_a_14', true),
				'dk_a_15' => $this->input->post('dk_a_15', true),
				'dk_a_16' => $this->input->post('dk_a_16', true),
				'dk_a_17' => $this->input->post('dk_a_17', true),
				'dk_a_18' => $this->input->post('dk_a_18', true),
				'dk_a_19' => $this->input->post('dk_a_19', true),
				'dk_a_20' => $this->input->post('dk_a_20', true),
				'dk_a_21' => $this->input->post('dk_a_21', true),
				'dk_a_22' => $this->input->post('dk_a_22', true),
				'jumlah_klik' => $this->input->post('jumlah_klik', true),
			];
			$this->db->insert('history_qmc_1', $data);

			$data1 = [
				'id' => $id,
				'rm_b_1' => $this->input->post('rm_b_1', true),
				'rm_b_2' => $this->input->post('rm_b_2', true),
				'rm_b_3' => $this->input->post('rm_b_3', true),
				'rm_b_4' => $this->input->post('rm_b_4', true),
				'rm_b_5' => $this->input->post('rm_b_5', true),
				'rm_b_6' => $this->input->post('rm_b_6', true),
				'rm_b_7' => $this->input->post('rm_b_7', true),
				'rm_b_8' => $this->input->post('rm_b_8', true),
				'rm_b_9' => $this->input->post('rm_b_9', true),
				'rm_b_10' => $this->input->post('rm_b_10', true),
				'rm_b_11' => $this->input->post('rm_b_11', true),
				'rm_b_12' => $this->input->post('rm_b_12', true),
				'rm_b_13' => $this->input->post('rm_b_13', true),
				'rm_b_14' => $this->input->post('rm_b_14', true),
				'rm_b_15' => $this->input->post('rm_b_15', true),
				'rm_b_16' => $this->input->post('rm_b_16', true),
				'rm_b_17' => $this->input->post('rm_b_17', true),
				'rm_b_18' => $this->input->post('rm_b_18', true),
				'rm_b_19' => $this->input->post('rm_b_19', true),
				'rm_b_20' => $this->input->post('rm_b_20', true),
				'rm_b_21' => $this->input->post('rm_b_21', true),
				'rm_b_22' => $this->input->post('rm_b_22', true),
				'rm_b_23' => $this->input->post('rm_b_23', true),
				'rm_b_24' => $this->input->post('rm_b_24', true),
				'rm_b_25' => $this->input->post('rm_b_25', true),
			];
			$this->db->insert('history_qmc_2', $data1);

			$data2 = [
				'id' => $id,
				'pmt_a_1' => $this->input->post('pmt_a_1', true),
				'pmt_a_2' => $this->input->post('pmt_a_2', true),
				'pmt_a_3' => $this->input->post('pmt_a_3', true),
				'pmt_a_4' => $this->input->post('pmt_a_4', true),
				'pmt_a_5' => $this->input->post('pmt_a_5', true),
				'pmt_a_6' => $this->input->post('pmt_a_6', true),
				'pmt_a_7' => $this->input->post('pmt_a_7', true),
				'pmt_a_8' => $this->input->post('pmt_a_8', true),
				'pmt_a_9' => $this->input->post('pmt_a_9', true),
				'pmt_a_10' => $this->input->post('pmt_a_10', true),
				'pmt_a_11' => $this->input->post('pmt_a_11', true),
				'pmt_a_12' => $this->input->post('pmt_a_12', true),
				'pmt_a_13' => $this->input->post('pmt_a_13', true),
				'pmt_a_14' => $this->input->post('pmt_a_14', true),
				'pmt_a_15' => $this->input->post('pmt_a_15', true),
				'pmt_a_16' => $this->input->post('pmt_a_16', true),
				'pmt_a_17' => $this->input->post('pmt_a_17', true),
				'pmt_a_18' => $this->input->post('pmt_a_18', true),
				'pmt_a_ketebalanpadkanan' => $this->input->post('pmt_a_ketebalanpadkanan', true),
				'pmt_a_ketebalanpadkiri' => $this->input->post('pmt_a_ketebalanpadkiri', true),
			];
			$this->db->insert('history_qmc_3', $data2);

			$data3 = [
				'id' => $id,
				'pmt_b_1' => $this->input->post('pmt_b_1', true),
				'pmt_b_2' => $this->input->post('pmt_b_2', true),
				'pmt_b_3' => $this->input->post('pmt_b_3', true),
				'pmt_b_4' => $this->input->post('pmt_b_4', true),
				'pmt_b_5' => $this->input->post('pmt_b_5', true),
				'pmt_b_6' => $this->input->post('pmt_b_6', true),
				'pmt_b_7' => $this->input->post('pmt_b_7', true),
				'pmt_b_8' => $this->input->post('pmt_b_8', true),
				'pmt_b_9' => $this->input->post('pmt_b_9', true),
				'pmt_b_10' => $this->input->post('pmt_b_10', true),
				'pmt_b_11' => $this->input->post('pmt_b_11', true),
				'pmt_b_12' => $this->input->post('pmt_b_12', true),
				'pmt_b_13' => $this->input->post('pmt_b_13', true),
				'pmt_b_14' => $this->input->post('pmt_b_14', true),
				'pmt_b_15' => $this->input->post('pmt_b_15', true),
				'pmt_b_16' => $this->input->post('pmt_b_16', true),
				'pmt_b_17' => $this->input->post('pmt_b_17', true),
				'pmt_b_ketebalanpadkanan' => $this->input->post('pmt_b_ketebalanpadkanan', true),
				'pmt_b_ketebalanpadkiri' => $this->input->post('pmt_b_ketebalanpadkiri', true),
			];
			$this->db->insert('history_qmc_4', $data3);

			$data4 = [
				'id' => $id,
				'pma_a_1' => $this->input->post('pma_a_1', true),
				'pma_a_2' => $this->input->post('pma_a_2', true),
				'pma_a_3' => $this->input->post('pma_a_3', true),
				'pma_a_4' => $this->input->post('pma_a_4', true),
				'pma_a_5' => $this->input->post('pma_a_5', true),
				'pma_a_6' => $this->input->post('pma_a_6', true),
				'pma_a_7' => $this->input->post('pma_a_7', true),
				'pma_a_8' => $this->input->post('pma_a_8', true),
				'pma_a_9' => $this->input->post('pma_a_9', true),
				'pma_a_10' => $this->input->post('pma_a_10', true),
				'pma_b_1' => $this->input->post('pma_b_1', true),
				'pma_b_2' => $this->input->post('pma_b_2', true),
				'pma_b_3' => $this->input->post('pma_b_3', true),
				'pma_b_4' => $this->input->post('pma_b_4', true),
				'pma_b_5' => $this->input->post('pma_b_5', true),
				'pma_b_6' => $this->input->post('pma_b_6', true),
				'pma_b_7' => $this->input->post('pma_b_7', true),
				'pma_b_8' => $this->input->post('pma_b_8', true),
				'pma_b_9' => $this->input->post('pma_b_9', true),
			];
			$this->db->insert('history_qmc_5', $data4);

			$data5 = [
				'id' => $id,
				'pmb_a_1' => $this->input->post('pmb_a_1', true),
				'pmb_a_2' => $this->input->post('pmb_a_2', true),
				'pmb_a_3' => $this->input->post('pmb_a_3', true),
				'pmb_a_4' => $this->input->post('pmb_a_4', true),
				'pmb_a_5' => $this->input->post('pmb_a_5', true),
				'pmb_a_6' => $this->input->post('pmb_a_6', true),
				'pmb_b_1' => $this->input->post('pmb_b_1', true),
				'pmb_b_2' => $this->input->post('pmb_b_2', true),
				'pmb_b_3' => $this->input->post('pmb_b_3', true),
				'pmb_b_4' => $this->input->post('pmb_b_4', true),
				'pmb_b_5' => $this->input->post('pmb_b_5', true),
				'pmb_b_6' => $this->input->post('pmb_b_6', true),
				'pmb_b_7' => $this->input->post('pmb_b_7', true),
				'pma2_a_1' => $this->input->post('pma2_a_1', true),
				'pma2_b_1' => $this->input->post('pma2_b_1', true),
				'pma2_b_2' => $this->input->post('pma2_b_2', true),
				'pmb2_b_1' => $this->input->post('pmb2_b_1', true),
				'pmb2_b_2' => $this->input->post('pmb2_b_2', true),
				'pma3_b_1' => $this->input->post('pma3_b_1', true),
				'catatan_qmc' => $this->input->post('catatan', true),
			];
			$this->db->insert('history_qmc_6', $data5);

			$data6 = [
				'status' => "cuci kendaraan",
			];
			$this->db->where('plat_nomor', $platnomor);
			$this->db->update('antrian', $data6);

			// if($this->input->get('namaparts')) {
				$jumlah = 0;

				if (is_countable($this->input->post('namaparts'))) {
					$jumlah = count($this->input->post('namaparts'));
				}
				
				for($i=0;$i<$jumlah;$i++){
					$z = $i+1;
					$namapart = $this->input->post('namaparts', true)[$i];
					$status = $this->input->post('namaparts'.$z, true);
					$this->db->query('
					UPDATE history_part
					SET status = "'.$status.'"
					WHERE nama_part = "'.$namapart.'" AND id_history_part = "'.$id.'";');
				}
			// }
			
			redirect('c_karu/cucikendaraan/'.$platnomor);
		}
	}

	function cucikendaraan($platnomor)
    {

		$this->form_validation->set_rules('cucikendaraan', 'Cuci Kendaraan', 'required');

		$nomorpitstop = $this->session->userdata['nomor_pitstop'];
		$harus_servis = $this->db->get_where('antrian', ['no_antrian' => $nomorpitstop, 'status' => "penyerahan work order"])->row_array();
		$harus_tasklist = $this->db->get_where('antrian', ['no_antrian' => $nomorpitstop, 'status' => "task list"])->row_array();
		$harus_qmc = $this->db->get_where('antrian', ['no_antrian' => $nomorpitstop, 'status' => "quick maintenance checksheet"])->row_array();
		
		if($harus_servis){
			redirect('c_karu/monitoringservis');
		}
		if($harus_tasklist){
			redirect('c_karu/tasklist/'.$platnomor);
		}
		if($harus_qmc){
			redirect('c_karu/formqmc/'.$platnomor);
		}

		if ($this->form_validation->run() == false) {
			$id = $platnomor." - ".date("Y-m-d");
			$this->db->select('*');
			$this->db->from('history_workorder');
			$this->db->where('id_history_workorder', $id);
			$query = $this->db->get();
			$data['res'] = $query->row_array();

			$this->load->view('cuci kendaraan', $data);
		} else {
			$id = $platnomor." - ".date("Y-m-d");
			$data = [
				'id' => $id,
				'cuci_kendaraan' => $this->input->post('cucikendaraan', true),
			];
			$this->db->insert('history_cuci', $data);

			$data2 = [
				'id' => $id,
				'konfirmasi' => "Belum",
				'nomor_polisi_selesai' => $platnomor,
				'tgl' => date("Y-m-d")
			];
			$this->db->insert('telah_servis', $data2);

			$this->db->where('nomor_polisi', $platnomor);
			$this->db->delete('sedang_servis');

			$this->db->set('no_antrian', '0');
			$this->db->where('plat_nomor', $platnomor);
			$this->db->update('antrian');

			$nomorpitstop = $this->session->userdata['nomor_pitstop'];
			$harus_update = $this->db->get_where('antrian', ['no_antrian' => 4])->row_array();
			if($harus_update){
				$this->db->query('UPDATE antrian SET `no_antrian` = '.$nomorpitstop.' WHERE `no_antrian` = 4;');
				$this->db->query('UPDATE antrian SET `no_antrian` = `no_antrian` - 1 WHERE `no_antrian` > 3;');
			}

			$buat_sa = $this->db->get_where('history_pemeriksaan', ['id' => $id])->row_array();
			$serviceadvisor = $buat_sa['service_advisor'];
			$kepalaregu = $this->session->userdata['nama'];
			$teknisi_a = $this->session->userdata['teknisi_a'];
			$teknisi_b = $this->session->userdata['teknisi_b'];

			$data3 = [
				'id_dikerjakanoleh' => $id,
				'serviceadvisor' => $serviceadvisor,
				'kepalaregu' => $kepalaregu,
				'teknisi_a' => $teknisi_a,
				'teknisi_b' => $teknisi_b,
			];

			$this->db->insert('dikerjakan_oleh', $data3);

			$buat_update_alat = $this->db->get_where('history_workorder', ['id_history_workorder' => $id])->row_array();
			$id_servisnya = $buat_update_alat['paket_servis_wo'];

			$jumlah_alat_tambah = $this->db->get_where('alat_untuk_servis', ['id_servis_alat' => $id_servisnya])->row_array();

			$pistonringcompressor = $jumlah_alat_tambah['pistonringcompressor'];
			$pistonringexpander = $jumlah_alat_tambah['pistonringexpander'];
			$valvespringcompressor = $jumlah_alat_tambah['valvespringcompressor'];
			$oilfilterremover = $jumlah_alat_tambah['oilfilterremover'];
			$oilsealpuller = $jumlah_alat_tambah['oilsealpuller'];
			$bearingcuppuller = $jumlah_alat_tambah['bearingcuppuller'];
			$universalpuller = $jumlah_alat_tambah['universalpuller'];
			$clutchcentralaligningtool = $jumlah_alat_tambah['clutchcentralaligningtool'];
			$bearingpullerattachment = $jumlah_alat_tambah['bearingpullerattachment'];
			$slidinghammer = $jumlah_alat_tambah['slidinghammer'];
			$discbrakepistontool = $jumlah_alat_tambah['discbrakepistontool'];
			$coilspringcompressor = $jumlah_alat_tambah['coilspringcompressor'];
			$balljointseparator = $jumlah_alat_tambah['balljointseparator'];
			$tierodremover = $jumlah_alat_tambah['tierodremover'];
			$differentialflangeholder = $jumlah_alat_tambah['differentialflangeholder'];
			$impactdriver = $jumlah_alat_tambah['impactdriver'];
			$carlift = $jumlah_alat_tambah['carlift'];
			$enginestand = $jumlah_alat_tambah['enginestand'];
			$mesinlas = $jumlah_alat_tambah['mesinlas'];
			$airgun = $jumlah_alat_tambah['airgun'];

			$this->db->query("UPDATE alat_servis_tersedia SET `pistonringcompressor_jml` = `pistonringcompressor_jml` + '$pistonringcompressor';");
			$this->db->query("UPDATE alat_servis_tersedia SET `pistonringexpander_jml` = `pistonringexpander_jml` + '$pistonringexpander';");
			$this->db->query("UPDATE alat_servis_tersedia SET `valvespringcompressor_jml` = `valvespringcompressor_jml` + '$valvespringcompressor';");
			$this->db->query("UPDATE alat_servis_tersedia SET `oilfilterremover_jml` = `oilfilterremover_jml` + '$oilfilterremover';");
			$this->db->query("UPDATE alat_servis_tersedia SET `oilsealpuller_jml` = `oilsealpuller_jml` + '$oilsealpuller';");
			$this->db->query("UPDATE alat_servis_tersedia SET `bearingcuppuller_jml` = `bearingcuppuller_jml` + '$bearingcuppuller';");
			$this->db->query("UPDATE alat_servis_tersedia SET `universalpuller_jml` = `universalpuller_jml` + '$universalpuller';");
			$this->db->query("UPDATE alat_servis_tersedia SET `clutchcentralaligningtool_jml` = `clutchcentralaligningtool_jml` + '$clutchcentralaligningtool';");
			$this->db->query("UPDATE alat_servis_tersedia SET `bearingpullerattachment_jml` = `bearingpullerattachment_jml` + '$bearingpullerattachment';");
			$this->db->query("UPDATE alat_servis_tersedia SET `slidinghammer_jml` = `slidinghammer_jml` + '$slidinghammer';");
			$this->db->query("UPDATE alat_servis_tersedia SET `discbrakepistontool_jml` = `discbrakepistontool_jml` + '$discbrakepistontool';");
			$this->db->query("UPDATE alat_servis_tersedia SET `coilspringcompressor_jml` = `coilspringcompressor_jml` + '$coilspringcompressor';");
			$this->db->query("UPDATE alat_servis_tersedia SET `balljointseparator_jml` = `balljointseparator_jml` + '$balljointseparator';");
			$this->db->query("UPDATE alat_servis_tersedia SET `tierodremover_jml` = `tierodremover_jml` + '$tierodremover';");
			$this->db->query("UPDATE alat_servis_tersedia SET `differentialflangeholder_jml` = `differentialflangeholder_jml` + '$differentialflangeholder';");
			$this->db->query("UPDATE alat_servis_tersedia SET `impactdriver_jml` = `impactdriver_jml` + '$impactdriver';");
			$this->db->query("UPDATE alat_servis_tersedia SET `carlift_jml` = `carlift_jml` + '$carlift';");
			$this->db->query("UPDATE alat_servis_tersedia SET `enginestand_jml` = `enginestand_jml` + '$enginestand';");
			$this->db->query("UPDATE alat_servis_tersedia SET `mesinlas_jml` = `mesinlas_jml` + '$mesinlas';");
			$this->db->query("UPDATE alat_servis_tersedia SET `airgun_jml` = `airgun_jml` + '$airgun';");

			require APPPATH . 'views/vendor/autoload.php';

			$options = array(
				'cluster' => 'ap1',
				'useTLS' => true
			);
			$pusher = new Pusher\Pusher(
				'a902db797c535c945df3',
				'12d83dd021e62d0e486e',
				'1490331',
				$options
			);

			$data4['message'] = "selesaiservis";
			$pusher->trigger('my-channel', 'my-event', $data4);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Servis <strong>'.$platnomor.'</strong> telah selesai.</div>');
			redirect('c_karu/monitoringservis');
		}
    }
}