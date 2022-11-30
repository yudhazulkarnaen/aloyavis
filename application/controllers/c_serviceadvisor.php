<?php

class C_serviceadvisor extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		if (!isset($this->session->userdata['nama'])){
			redirect('');
		}
		if ($this->session->userdata['role'] == 2){
			redirect('c_karu');
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
		$date = date("Y-m-d");
		$this->db->where('tgl_antrian !=', $date);
		$this->db->delete('antrian');

		$hasil = $this->db->query("SELECT COUNT(*) AS RowCnt FROM antrian;");
		$wow = $hasil->row_array();
		$isemptyantrian = $wow['RowCnt'];

		if($isemptyantrian == 0){
			$this->db->query("DELETE FROM sedang_servis");
		}

		$this->load->view('home');
	}

	public function daftarantrian()
	{
		$data['judul'] = 'Daftar Antrian';
		// $data['atr'] = $this->m_data->getAllAntrianNew();
		$data['date'] = date("d/m/Y");
		// $this->load->view('daftar antrian', $data);

		if ($this->input->post('submit')) {
			$data['keyword_daftarantrian'] = $this->input->post('keyword_daftarantrian');
			$this->session->set_userdata('keyword_daftarantrian', $data['keyword_daftarantrian']);
		} else if($this->session->userdata('keyword_daftarantrian')){
			$data['keyword_daftarantrian'] = $this->session->userdata('keyword_daftarantrian');
		} else {
			$data['keyword_daftarantrian'] = "";
		}

		// config
		$date = date("Y:m:d");
		$this->db->select('*');
		$this->db->like('plat_nomor',$data['keyword_daftarantrian']);
		$this->db->join('mobil', 'mobil.nomor_polisi = antrian.plat_nomor');
		$this->db->order_by("no_antrian", "asc");
		$this->db->where('tgl_antrian', $date);
		$this->db->from('antrian');
		$config['base_url'] = site_url('c_serviceadvisor/daftarantrian');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;

		//initialize
		$this->pagination->initialize($config);

		if ($data['keyword_daftarantrian'] != ""){
			$data['wew'] = "<p style='margin-top: -20px;'><strong>Keyword Pencarian = ".$data['keyword_daftarantrian']."</strong></p>";
		} else {
			$data['wew'] = "";
		}

		$data['start'] = $this->uri->segment(3);
		$data['res'] = $this->m_data->getDaftarantrian($config['per_page'],$data['start'],$data['keyword_daftarantrian']);

		$this->load->view('daftar antrian', $data);
	}

	public function detailAntrian($platnomor){
		$this->db->select('*');
		$this->db->from('antrian');
		$this->db->where('plat_nomor', $platnomor);
		$query = $this->db->get();
		$data['res'] = $query->row_array();

		$this->db->select('*');
		$this->db->from('mobil');
		$this->db->where('nomor_polisi', $platnomor);
		$query1 = $this->db->get();
		$data['res2'] = $query1->row_array();

		$jamservis = $query->row_array();
		$variabelestimasi = $jamservis['jam_servis'];
		$timestamp = strtotime("$variabelestimasi") + 60*60;
		$data['estimasiselesai'] = date('H:i:s', $timestamp);

		$this->load->view('detail antrian', $data);
	}

	public function pengecekan($platnomor)
	{
		$this->form_validation->set_rules('namapemilik', 'Nama Pemilik', 'required');
		$this->form_validation->set_rules('nomorpolisi', 'Nomor Polisi', 'required');
		$this->form_validation->set_rules('merkkendaraan', 'Merk Kendaraan', 'required');
		$this->form_validation->set_rules('tahunkendaraan', 'Tahun Kendaraan', 'required');
		$this->form_validation->set_rules('nomortelepon', 'Nomor Telepon', 'required');
		$this->form_validation->set_rules('nomorhandphone', 'Nomor Handphone', 'required');
		$this->form_validation->set_rules('serviceadvisor', 'Service Advisor', 'required');
		$this->form_validation->set_rules('jamservis', 'Jam Servis', 'required');
		$this->form_validation->set_rules('tglservis', 'Tanggal Servis', 'required');
		$this->form_validation->set_rules('field_stnk', 'STNK', 'required');
		$this->form_validation->set_rules('field_radio', 'Radio', 'required');
		$this->form_validation->set_rules('field_buku', 'Buku', 'required');
		$this->form_validation->set_rules('field_dongkrak', 'Dongkrak', 'required');
		$this->form_validation->set_rules('field_doproda', 'Dop Roda', 'required');
		$this->form_validation->set_rules('field_ban', 'Ban Cadangan', 'required');
		$this->form_validation->set_rules('field_segitiga', 'Segitiga Pengaman', 'required');
		$this->form_validation->set_rules('barang_berharga', 'Barang Berharga', 'required');
		$this->form_validation->set_rules('km', 'KM', 'required');
		$this->form_validation->set_rules('bahanbakar', 'Bahan Bakar', 'required');
		$this->form_validation->set_rules('kondisi_battery', 'Kondisi Battery', 'required');
		$this->form_validation->set_rules('depankanan', 'Ban Depan Kanan', 'required');
		$this->form_validation->set_rules('depankiri', 'Ban Depan Kiri', 'required');
		$this->form_validation->set_rules('belakangkanan', 'Ban Belakang Kanan', 'required');
		$this->form_validation->set_rules('belakangkiri', 'Ban Belakang Kiri', 'required');

		$haruswo = $this->db->get_where('antrian', ['plat_nomor' => $platnomor, 'status' => 'work order'])->row_array();
		if($haruswo){
			redirect('c_serviceadvisor/workorder/'.$platnomor);
		}
		
		if ($this->form_validation->run() == false) {
			$this->db->select('*');
			$this->db->from('mobil');
			$this->db->where('nomor_polisi', $platnomor);
			$query = $this->db->get();
			$data['res'] = $query->row_array();

			$data['date'] = date("Y-m-d");

			$this->db->select('jam_servis');
			$this->db->from('antrian');
			$this->db->where('plat_nomor', $platnomor);
			$query1 = $this->db->get();
			$data['res2'] = $query1->row_array();

			// $data['servis'] = $this->m_data->get_servis();

			$this->load->view('pengecekan', $data);
		} else {
			$id = $platnomor." - ".date("Y-m-d");
			$data = [
				'id' => $id,
				'nama_pemilik_pemeriksaan' => $this->input->post('namapemilik', true),
				'nomor_polisi_pemeriksaan' => $this->input->post('nomorpolisi', true),
				'merk_kendaraan_pemeriksaan' => $this->input->post('merkkendaraan', true),
				'tahun_kendaraan_pemeriksaan' => $this->input->post('tahunkendaraan', true),
				'nomor_telepon_pemeriksaan' => $this->input->post('nomortelepon', true),
				'nomor_handphone_pemeriksaan' => $this->input->post('nomorhandphone', true),
				'service_advisor' => $this->input->post('serviceadvisor', true),
				'jam_servis' => $this->input->post('jamservis', true),
				'tgl_servis' => $this->input->post('tglservis', true),
				'stnk' => $this->input->post('field_stnk', true),
				'radio' => $this->input->post('field_radio', true),
				'buku' => $this->input->post('field_buku', true),
				'dongkrak' => $this->input->post('field_dongkrak', true),
				'doproda' => $this->input->post('field_doproda', true),
				'ban' => $this->input->post('field_ban', true),
				'segitiga' => $this->input->post('field_segitiga', true),
				'barang_berharga' => $this->input->post('barang_berharga', true),
				'km' => $this->input->post('km', true),
				'bahan_bakar' => $this->input->post('bahanbakar', true),
				'kondisi_battery' => $this->input->post('kondisi_battery', true),
				'depan_kanan' => $this->input->post('depankanan', true),
				'depan_kiri' => $this->input->post('depankiri', true),
				'belakang_kanan' => $this->input->post('belakangkanan', true),
				'belakang_kiri' => $this->input->post('belakangkiri', true),
			];
			$this->db->insert('history_pemeriksaan', $data);

			$data2 = [
				'status' => 'work order'
			];
			$this->db->where('plat_nomor', $platnomor);
			$this->db->update('antrian', $data2);
			
			redirect('c_serviceadvisor/workorder/'.$platnomor);
		}
	}

	function get_subkategori(){
        $id=$this->input->post('id');
		$merk=$this->input->post('merk');

        $data=$this->m_data->get_subkategori($id, $merk);

		// $this->db->select('*');
		// $this->db->from('harga_servis');
		// $this->db->where('id_servis', $id);
		// $this->db->where('merk_kendaraan', $merk);
		// $query = $this->db->get();
		// $data1 = $query->result();

		// echo json_encode($data1);
        echo json_encode($data);

		// $this->db->select('*');
		// $this->db->from('kegiatan_servis');
        // $this->db->join('harga_servis', 'harga_servis.id_servis = kegiatan_servis.id_kegiatan_servis');
        // $this->db->where('id', $id);
		// $this->db->where('id', $id);
		// $query = $this->db->get();
    }

	public function tambahAntrian()
	{
		$this->form_validation->set_rules('nomorpolisi', 'Nomor Polisi', 'required|trim');
		$this->form_validation->set_rules('jamservis', 'Jam Servis', 'required|trim');

		$jam_servis=array();
		// $jampertama = $this->m_data->get_jamAntrianPertama();
		// $dt = DateTime::createFromFormat("H:i:s", $jampertama);
		// $hours = $dt->format('H');
		// $int = (int)$hours;

		for ($x = 8; $x <= 17; $x++) {
			$time = strtotime("$x:00:00");
			$newformat = date('H:i:s',$time);
			array_push($jam_servis,$newformat);
			array_push($jam_servis,$newformat);
			array_push($jam_servis,$newformat);
		}
		
		$sql = "SELECT `jam_servis` FROM `antrian` ORDER BY `antrian`.`jam_servis` ASC";
		$query = $this->db->query($sql);
		$array1=$query->result_array();
		$jam_sudah_isi = array_map (function($value){
			return $value['jam_servis'];
		} , $array1);

		$result = array_diff_assoc($jam_servis, $jam_sudah_isi);

		$jumlahAntrian = $this->m_data->jumlahAntrian();

		// $sql5 = $this->db->query("SELECT COUNT(no_antrian) FROM antrian WHERE no_antrian < 1;");
		// $query5 = $this->db->query($sql5);
		// $jumlahnol = $query5->row_array();
		// $variabelnol = $jumlahnol['COUNT(no_antrian)'];

		$this->db->select('*');
		$this->db->from('antrian');
		$this->db->where('no_antrian <', 1);
		$variabelnol = $this->db->count_all_results();

		$this->db->select_max('no_antrian');
		$query = $this->db->get('antrian');
		$maximum = $query->row_array();
		$variabelestimasi = $maximum['no_antrian'];
		$no_antrian = 0;
		for ($x = 1; $x <= $variabelestimasi; $x++) {
			$jikaada = $this->db->get_where('antrian', ['no_antrian' => $x])->row_array();
			if(empty($jikaada)){
				$no_antrian = $x;
			}
		}

		$adanol = $this->db->get_where('antrian', ['no_antrian' => 0])->row_array();
		if($adanol){
			$jumlahAntrian = $jumlahAntrian - $variabelnol;
		}

		if($no_antrian == 0){
			$no_antrian = $jumlahAntrian+1;
		}
		// $no_antrian = $jumlahAntrian+1;

		// if ($jumlahAntrian == 0) {
		// 	$data['jam_servis'] = date("H:00:00", strtotime("+1 hour"));
		// } else {
			$data['jam_servis'] = array_values($result)[0];
			$data['console'] = $result;
			$data['console1'] = $jam_servis;
			$data['console2'] = $jam_sudah_isi;
		// }
		$data['judul'] = 'Tambah Antrian';
		$data['date'] = date("Y-m-d");

		$nomorpolisi = $this->input->post('nomorpolisi');
		$user = $this->db->get_where('antrian', ['plat_nomor' => $nomorpolisi])->row_array();
		$id = $nomorpolisi." - ".date("Y-m-d");
		$udahservis = $this->db->get_where('telah_servis', ['id' => $id])->row_array();

		if($udahservis){
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Peringatan!</strong> kendaraan telah servis hari ini.</div>');
			redirect('c_serviceadvisor/tambahAntrian');
		}

		if($user){
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Peringatan!</strong> nomor polisi telah ada di antrian.</div>');
			redirect('c_serviceadvisor/tambahAntrian');
		} elseif ($this->form_validation->run() == false) {
			$this->load->view('tambah antrian', $data);
		} else {
			$mobiltidakadadidb = $this->db->get_where('mobil', ['nomor_polisi' => $nomorpolisi])->row_array();

			if(empty($mobiltidakadadidb)){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Peringatan!</strong> data kendaraan tidak ditemukan.</div>');
				redirect('c_serviceadvisor/tambahAntrian');
			}
			
			$data = [
				'plat_nomor' => $this->input->post('nomorpolisi'),
				'jam_servis' => $this->input->post('jamservis'),
				'no_antrian' => $no_antrian,
				'tgl_antrian' => $this->input->post('tglservis'),
				'status' => "pemeriksaan"
			];
			$this->db->insert('antrian', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Selamat!</strong> antrian berhasil ditambahkan.</div>');
			redirect('c_serviceadvisor/daftarantrian');

		}
	}

	function hapusAntrian($no_antrian)
	{

		$haruspemeriksaan = $this->db->get_where('antrian', ['no_antrian' => $no_antrian])->row_array();
		$platnomor = $haruspemeriksaan['plat_nomor'];
		$id = $platnomor." - ".date("Y-m-d");
		$this->db->where('id', $id);
		$this->db->delete('history_pemeriksaan');

		$where = array('no_antrian' => $no_antrian);
		$this->m_data->cancelAntrian($where,'antrian', $no_antrian);
		$jumlahAntrian = $this->m_data->jumlahAntrian();
		$this->m_data->updateAntrian($jumlahAntrian, $no_antrian);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Selamat!</strong> antrian berhasil dihapus.</div>');
		redirect('c_serviceadvisor/daftarantrian');
	}

	function autocompleteproject()
    {
        $this->db->like('nomor_polisi', $_GET['term'], 'both');
        $this->db->order_by('nomor_polisi', 'ASC');
        // $this->db->limit(10);
        $result = $this->db->get('mobil')->result();
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nomor_polisi;
            echo json_encode($arr_result);
        }
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
		$this->session->unset_userdata('keyword_sedangservis');
		$this->session->unset_userdata('keyword_daftarantrian');
		$this->session->unset_userdata('keyword_selesaiservis');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been logout.</div>');
		redirect('');
	}

	public function antrian()
	{
		$data['atr'] = $this->m_data->getAllAntrian();
		$this->load->view('antrian (sa)', $data);
	}

	public function daftarsedangservis()
	{
		// $data['atr'] = $this->m_data->getAllSedangServis();
		$data['date'] = date("d/m/Y");
		// $data['jmlantrian'] = $this->m_data->jumlahSedangServis();

		$this->db->select('*');
		$this->db->from('request_part');
		$data['part'] = $this->db->get()->result_array();

		// $this->load->view('daftar sedang servis', $data);

		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword_sedangservis'] = $this->input->post('keyword_sedangservis');
			$this->session->set_userdata('keyword_sedangservis', $data['keyword_sedangservis']);
		} else if($this->session->userdata('keyword_sedangservis')){
			$data['keyword_sedangservis'] = $this->session->userdata('keyword_sedangservis');
		} else {
			$data['keyword_sedangservis'] = "";
		}

		// config
		$this->db->select('*');
		$this->db->like('nomor_polisi',$data['keyword_sedangservis']);
		$this->db->from('sedang_servis');
		$this->db->join('antrian', 'antrian.plat_nomor = sedang_servis.nomor_polisi');
		$config['base_url'] = site_url('c_serviceadvisor/daftarsedangservis');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;

		//initialize
		$this->pagination->initialize($config);


		if ($data['keyword_sedangservis'] != ""){
			$data['wew'] = "<p style='margin-top: -20px;'><strong>Keyword Pencarian = ".$data['keyword_sedangservis']."</strong></p>";
		} else {
			$data['wew'] = "";
		}

		$data['start'] = $this->uri->segment(3);
		$data['res'] = $this->m_data->getSedangservis($config['per_page'],$data['start'],$data['keyword_sedangservis']);

		$this->load->view('daftar sedang servis', $data);
	}

	public function daftarselesaiservis()
	{
		// $data['atr'] = $this->m_data->getAllTelahServis();
		// $data['jmlantrian'] = $this->m_data->jumlahTelahServis();
		// $this->load->view('daftar selesai servis', $data);

		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword_selesaiservis'] = $this->input->post('keyword_selesaiservis');
			$this->session->set_userdata('keyword_selesaiservis', $data['keyword_selesaiservis']);
		} else if($this->session->userdata('keyword_selesaiservis')){
			$data['keyword_selesaiservis'] = $this->session->userdata('keyword_selesaiservis');
		} else {
			$data['keyword_selesaiservis'] = "";
		}

		// config
		$this->db->select('*');
		$this->db->like('nomor_polisi_selesai',$data['keyword_selesaiservis']);
		$this->db->from('telah_servis');
		$config['base_url'] = site_url('c_serviceadvisor/daftarselesaiservis');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;

		//initialize
		$this->pagination->initialize($config);


		if ($data['keyword_selesaiservis'] != ""){
			$data['wew'] = "<p style='margin-top: -20px;'><strong>Keyword Pencarian = ".$data['keyword_selesaiservis']."</strong></p>";
		} else {
			$data['wew'] = "";
		}

		$data['start'] = $this->uri->segment(3);
		$data['res'] = $this->m_data->getSelesaiservis($config['per_page'],$data['start'],$data['keyword_selesaiservis']);

		$this->load->view('daftar selesai servis', $data);
	}

	public function profil()
	{
		// $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		// $this->form_validation->set_rules('nip', 'Nomor Induk Pegawai', 'required');
		// $this->form_validation->set_rules('handphone', 'Handphone', 'required');

		// if ($this->form_validation->run() == false) {

			$username = $this->session->userdata('username');
			$this->db->select('*');
       		$this->db->from('users');
      		$this->db->where('username', $username);
			$query = $this->db->get();
			$data['res'] = $query->row_array();

			$this->load->view('profil', $data);
		// } else {

		// 	$username = $this->input->post('username', true);

		// 	$data = [
		// 		'nama' => $this->input->post('nama', true),
		// 		'nip' => $this->input->post('nip', true),
		// 		'handphone' => $this->input->post('handphone', true),
		// 	];

		// 	$this->db->where('username', $username);
        // 	$this->db->update('users', $data);
			
		// 	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Selamat!</strong> data profil berhasil diupdate.</div>');
		// 	redirect('c_serviceadvisor/profil');
		// }
	}

	public function gantipassword()
	{
		$this->form_validation->set_rules('oldpassword', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password Baru', 'required|trim|matches[password2]');
		$this->form_validation->set_rules('password2', 'Ulangi Password Baru', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false) {
			$this->load->view('ganti password');
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
				redirect('c_serviceadvisor/gantipassword');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong old password!</div>');
				redirect('c_serviceadvisor/gantipassword');
			}
		}
	}

	public function workorder($platnomor)
	{
		$this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
		$this->form_validation->set_rules('kategori', 'Paket Service', 'required');
		$this->form_validation->set_rules('namaparts[]', 'Part Tambahan', 'required');

		$haruspemeriksaan = $this->db->get_where('antrian', ['plat_nomor' => $platnomor, 'status' => 'pemeriksaan'])->row_array();
		if($haruspemeriksaan){
			redirect('c_serviceadvisor/pengecekan/'.$platnomor);
		}

		if ($this->form_validation->run() == false) {
			$this->db->select('*');
			$this->db->from('mobil');
			$this->db->where('nomor_polisi', $platnomor);
			$query = $this->db->get();
			$data['res'] = $query->row_array();

			$id = $platnomor." - ".date("Y-m-d");
			$this->db->select('km');
			$this->db->from('history_pemeriksaan');
			$this->db->where('id', $id);
			$query1 = $this->db->get();
			$data['res2'] = $query1->row_array();

			$this->db->select('*');
			$this->db->from('antrian');
			$this->db->where('plat_nomor', $platnomor);
			$query2 = $this->db->get();
			$data['res3'] = $query2->row_array();

			$data['data'] = $this->m_data->get_servis();

			$jamservis = $query2->row_array();
			$variabelestimasi = $jamservis['jam_servis'];
			$timestamp = strtotime("$variabelestimasi") + 60*60;
			$data['estimasiselesai'] = date('H:i', $timestamp);

			$this->load->view('workorder', $data);
		} else {
			$nomorpitstop = $this->input->post('nomorpitstop', true);
			$gakadakaru = $this->db->get_where('users', ['nomor_pitstop' => $nomorpitstop])->row_array();
			if(empty($gakadakaru)){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Peringatan!</strong> tidak ada kepala regu dan pitstop yang kosong.</div>');
				redirect('c_serviceadvisor/workorder/'.$platnomor);
			}

			$pistonringcompressor = $this->input->post('pistonringcompressor', true);
			$pistonringexpander = $this->input->post('pistonringexpander', true);
			$valvespringcompressor = $this->input->post('valvespringcompressor', true);
			$oilfilterremover = $this->input->post('oilfilterremover', true);
			$oilsealpuller = $this->input->post('oilsealpuller', true);
			$bearingcuppuller = $this->input->post('bearingcuppuller', true);
			$universalpuller = $this->input->post('universalpuller', true);
			$clutchcentralaligningtool = $this->input->post('clutchcentralaligningtool', true);
			$bearingpullerattachment = $this->input->post('bearingpullerattachment', true);
			$slidinghammer = $this->input->post('slidinghammer', true);
			$discbrakepistontool = $this->input->post('discbrakepistontool', true);
			$coilspringcompressor = $this->input->post('coilspringcompressor', true);
			$balljointseparator = $this->input->post('balljointseparator', true);
			$tierodremover = $this->input->post('tierodremover', true);
			$differentialflangeholder = $this->input->post('differentialflangeholder', true);
			$impactdriver = $this->input->post('impactdriver', true);
			$carlift = $this->input->post('carlift', true);
			$enginestand = $this->input->post('enginestand', true);
			$mesinlas = $this->input->post('mesinlas', true);
			$airgun = $this->input->post('airgun', true);

			$pistonringcompressor_jml = $this->input->post('pistonringcompressor_jml', true);
			$pistonringexpander_jml = $this->input->post('pistonringexpander_jml', true);
			$valvespringcompressor_jml = $this->input->post('valvespringcompressor_jml', true);
			$oilfilterremover_jml = $this->input->post('oilfilterremover_jml', true);
			$oilsealpuller_jml = $this->input->post('oilsealpuller_jml', true);
			$bearingcuppuller_jml = $this->input->post('bearingcuppuller_jml', true);
			$universalpuller_jml = $this->input->post('universalpuller_jml', true);
			$clutchcentralaligningtool_jml = $this->input->post('clutchcentralaligningtool_jml', true);
			$bearingpullerattachment_jml = $this->input->post('bearingpullerattachment_jml', true);
			$slidinghammer_jml = $this->input->post('slidinghammer_jml', true);
			$discbrakepistontool_jml = $this->input->post('discbrakepistontool_jml', true);
			$coilspringcompressor_jml = $this->input->post('coilspringcompressor_jml', true);
			$balljointseparator_jml = $this->input->post('balljointseparator_jml', true);
			$tierodremover_jml = $this->input->post('tierodremover_jml', true);
			$differentialflangeholder_jml = $this->input->post('differentialflangeholder_jml', true);
			$impactdriver_jml = $this->input->post('impactdriver_jml', true);
			$carlift_jml = $this->input->post('carlift_jml', true);
			$enginestand_jml = $this->input->post('enginestand_jml', true);
			$mesinlas_jml = $this->input->post('mesinlas_jml', true);
			$airgun_jml = $this->input->post('airgun_jml', true);

			// $pistonringcompressor_hasil = $pistonringcompressor_jml - $pistonringcompressor;
			// $pistonringexpander_hasil = $pistonringexpander_jml - $pistonringexpander;
			// $valvespringcompressor_hasil = $valvespringcompressor_jml - $valvespringcompressor;
			// $oilfilterremover_hasil = $oilfilterremover_jml - $oilfilterremover;
			// $oilsealpuller_hasil = $oilsealpuller_jml - $oilsealpuller;
			// $bearingcuppuller_hasil = $bearingcuppuller_jml - $bearingcuppuller;
			// $universalpuller_hasil = $universalpuller_jml - $universalpuller;
			// $clutchcentralaligningtool_hasil = $clutchcentralaligningtool_jml - $clutchcentralaligningtool;
			// $bearingpullerattachment_hasil = $bearingpullerattachment_jml - $bearingpullerattachment;
			// $slidinghammer_hasil = $slidinghammer_jml - $slidinghammer;
			// $discbrakepistontool_hasil = $discbrakepistontool_jml - $discbrakepistontool;
			// $coilspringcompressor_hasil = $coilspringcompressor_jml - $coilspringcompressor;
			// $balljointseparator_hasil = $balljointseparator_jml - $balljointseparator;
			// $tierodremover_hasil = $tierodremover_jml - $tierodremover;
			// $differentialflangeholder_hasil = $differentialflangeholder_jml - $differentialflangeholder;
			// $impactdriver_hasil = $impactdriver_jml - $impactdriver;
			// $carlift_hasil = $carlift_jml - $carlift;
			// $enginestand_hasil = $enginestand_jml - $enginestand;
			// $mesinlas_hasil = $mesinlas_jml - $mesinlas;
			// $airgun_hasil = $airgun_jml - $airgun;

			if ($pistonringcompressor_jml < $pistonringcompressor or $pistonringexpander_jml < $pistonringexpander or $valvespringcompressor_jml < $valvespringcompressor or $oilfilterremover_jml < $oilfilterremover or $oilsealpuller_jml < $oilsealpuller or $bearingcuppuller_jml < $bearingcuppuller or $universalpuller_jml < $universalpuller or $clutchcentralaligningtool_jml < $clutchcentralaligningtool or $bearingpullerattachment_jml < $bearingpullerattachment or $slidinghammer_jml < $slidinghammer or $discbrakepistontool_jml < $discbrakepistontool or $coilspringcompressor_jml < $coilspringcompressor or $balljointseparator_jml < $balljointseparator or $tierodremover_jml < $tierodremover or $differentialflangeholder_jml < $differentialflangeholder or $impactdriver_jml < $impactdriver or $carlift_jml < $carlift or $enginestand_jml < $enginestand or $mesinlas_jml < $mesinlas or $airgun_jml < $airgun) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Peringatan!</strong> jumlah peralatan tidak mencukupi, harap tunggu proses servis pit lain selesai</div>');
				redirect('c_serviceadvisor/workorder/'.$platnomor);
			}

			$id = $platnomor." - ".date("Y-m-d");

			$merkolimesin = $this->input->post('merkolimesin', true);
			if($merkolimesin == "Rp. 175000"){
				$inputmerk = "E-Pro Green SN GF-5";
			} elseif ($merkolimesin == "Rp. 150000"){
				$inputmerk = "E-Pro Blue";
			} elseif ($merkolimesin == "Rp. 125000"){
				$inputmerk = "E-Pro Gold";
			} else {
				$inputmerk = NULL;
			}

			$merkolitransmisi = $this->input->post('merkolitransmisi', true);
			if($merkolitransmisi == "Rp. 100000"){
				$inputmerk1 = "Oli Transmisi MTF";
			} elseif ($merkolitransmisi == "Rp. 200000"){
				$inputmerk1 = "Oli Transmisi ATF-DW1";
			} elseif ($merkolitransmisi == "Rp. 300000"){
				$inputmerk1 = "Oli transmisi ATF-Z1";
			} elseif ($merkolitransmisi == "Rp. 400000"){
				$inputmerk1 = "Oli transmisi HCF-2";
			} elseif ($merkolitransmisi == "Rp. 500000"){
				$inputmerk1 = "Oli transmisi CVTF";
			} else {
				$inputmerk1 = NULL;
			}

			if($merkolimesin == NULL){
				$hargaolimesin = "Rp. 0";
			}else{
				$hargaolimesin = $this->input->post('merkolimesin', true);
			}
			if($merkolitransmisi == NULL){
				$hargaolitransmisi = "Rp. 0";
			}else{
				$hargaolitransmisi = $this->input->post('merkolitransmisi', true);
			}

			$data = [
				'id_history_workorder' => $id,
				'nomor_pitstop_wo' => $this->input->post('nomorpitstop', true),
				'merk_kendaraan_wo' => $this->input->post('merkkendaraan', true),
				'tahun_kendaraan_wo' => $this->input->post('tahunkendaraan', true),
				'nomor_polisi_wo' => $this->input->post('nomorpolisi', true),
				'pemilik_kendaraan_wo' => $this->input->post('namapemilik', true),
				'nomor_handphone_wo' => $this->input->post('nomorhandphone', true),
				'alamat_pemilik_wo' => $this->input->post('alamatpemilik', true),
				'nomor_chasis_wo' => $this->input->post('nomorchasis', true),
				'nomor_mesin_wo' => $this->input->post('nomormesin', true),
				'warna_kendaraan_wo' => $this->input->post('warnakendaraan', true),
				'km_wo' => $this->input->post('km', true),
				'paket_servis_wo' => $this->input->post('kategori', true),
				'olimesin' => $this->input->post('olimesin', true),
				'merkolimesin' => $inputmerk,
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
				'merkolitransmisi' => $inputmerk1,
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
				'estimasiselesai' => $this->input->post('estimasiselesai', true),
				'harga_servis' => $this->input->post('hargaservis', true),
				'harga_olimesin' => $hargaolimesin,
				'harga_olitransmisi' => $hargaolitransmisi,
			];
			$this->db->insert('history_workorder', $data);

			$data2 = [
				'status' => 'penyerahan work order'
			];
			$this->db->where('plat_nomor', $platnomor);
			$this->db->update('antrian', $data2);

			$data3 = [
				'nomor_pitstop' => $this->input->post('nomorpitstop', true),
				'nomor_polisi' => $this->input->post('nomorpolisi', true),
				'nama_pemilik' => $this->input->post('namapemilik', true),
				'nomor_handphone' => $this->input->post('nomorhandphone', true),
				'request_karu' => 'BELUM ADA REQUEST',
				'catatan_karu' => 'BELUM ADA CATATAN',
			];
			$this->db->insert('sedang_servis', $data3);

			$jumlah = count($this->input->post('namaparts'));
			$id = $platnomor." - ".date("Y-m-d");
			for($i=0;$i<$jumlah;$i++){
				$data4 = array(
						'id_history_part' => $id,
						'nama_part'=> $this->input->post('namaparts')[$i],
						'harga'=> $this->input->post('harga')[$i],
					);
				$this->db->insert("history_part",$data4);
			}

			$this->db->query("UPDATE alat_servis_tersedia SET `pistonringcompressor_jml` = `pistonringcompressor_jml` - '$pistonringcompressor';");
			$this->db->query("UPDATE alat_servis_tersedia SET `pistonringexpander_jml` = `pistonringexpander_jml` - '$pistonringexpander';");
			$this->db->query("UPDATE alat_servis_tersedia SET `valvespringcompressor_jml` = `valvespringcompressor_jml` - '$valvespringcompressor';");
			$this->db->query("UPDATE alat_servis_tersedia SET `oilfilterremover_jml` = `oilfilterremover_jml` - '$oilfilterremover';");
			$this->db->query("UPDATE alat_servis_tersedia SET `oilsealpuller_jml` = `oilsealpuller_jml` - '$oilsealpuller';");
			$this->db->query("UPDATE alat_servis_tersedia SET `bearingcuppuller_jml` = `bearingcuppuller_jml` - '$bearingcuppuller';");
			$this->db->query("UPDATE alat_servis_tersedia SET `universalpuller_jml` = `universalpuller_jml` - '$universalpuller';");
			$this->db->query("UPDATE alat_servis_tersedia SET `clutchcentralaligningtool_jml` = `clutchcentralaligningtool_jml` - '$clutchcentralaligningtool';");
			$this->db->query("UPDATE alat_servis_tersedia SET `bearingpullerattachment_jml` = `bearingpullerattachment_jml` - '$bearingpullerattachment';");
			$this->db->query("UPDATE alat_servis_tersedia SET `slidinghammer_jml` = `slidinghammer_jml` - '$slidinghammer';");
			$this->db->query("UPDATE alat_servis_tersedia SET `discbrakepistontool_jml` = `discbrakepistontool_jml` - '$discbrakepistontool';");
			$this->db->query("UPDATE alat_servis_tersedia SET `coilspringcompressor_jml` = `coilspringcompressor_jml` - '$coilspringcompressor';");
			$this->db->query("UPDATE alat_servis_tersedia SET `balljointseparator_jml` = `balljointseparator_jml` - '$balljointseparator';");
			$this->db->query("UPDATE alat_servis_tersedia SET `tierodremover_jml` = `tierodremover_jml` - '$tierodremover';");
			$this->db->query("UPDATE alat_servis_tersedia SET `differentialflangeholder_jml` = `differentialflangeholder_jml` - '$differentialflangeholder';");
			$this->db->query("UPDATE alat_servis_tersedia SET `impactdriver_jml` = `impactdriver_jml` - '$impactdriver';");
			$this->db->query("UPDATE alat_servis_tersedia SET `carlift_jml` = `carlift_jml` - '$carlift';");
			$this->db->query("UPDATE alat_servis_tersedia SET `enginestand_jml` = `enginestand_jml` - '$enginestand';");
			$this->db->query("UPDATE alat_servis_tersedia SET `mesinlas_jml` = `mesinlas_jml` - '$mesinlas';");
			$this->db->query("UPDATE alat_servis_tersedia SET `airgun_jml` = `airgun_jml` - '$airgun';");

			require_once(APPPATH.'views/vendor/autoload.php');
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

			$nomorpitstop = $this->input->post('nomorpitstop', true);
			$data5['message'] = "workorder".$nomorpitstop;
			$pusher->trigger('my-channel', 'my-event', $data5);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Selamat!</strong> daftar sedang servis berhasil ditambahkan.</div>');
			redirect('c_serviceadvisor/daftarsedangservis/');
			}
	}

	public function do_upload($platnomor){
		$id = $platnomor." - ".date("Y-m-d");
		$imgData = base64_decode($this->input->post('photo', TRUE));
		$path = 'assets/eksterior/'.$id.'.png'; /* my path and file name with extension */
		if (file_exists($path)) {
			unlink($path);
		}
		/* create image */
		file_put_contents($path, $imgData);
	}

	public function getParts(){
		$name = $this->input->get('name');
		$fieldName = $this->input->get('fieldName');

		$countries = $this->m_data->getParts($name, $fieldName);
		echo json_encode($countries);exit;
	}

	public function get_notification()
	{
		$data = $this->m_data->get_notification()->result();
		echo json_encode($data);
	}
	public function get_selesaiservis()
	{
		$data = $this->m_data->get_selesaiservis()->result();
		echo json_encode($data);
	}

	public function rejectrequest($platnomor){
		$data = [
			'catatan_karu' => 'BELUM ADA CATATAN',
			'request_karu' => 'BELUM ADA REQUEST',
		];
		$this->db->where('nomor_polisi', $platnomor);
		$this->db->update('sedang_servis', $data);

		$this->db->where('plat_nomor_request', $platnomor);
		$this->db->delete('request_part');

		$haruswo = $this->db->get_where('sedang_servis', ['nomor_polisi' => $platnomor])->row_array();
		$nomorpitstop = $haruswo['nomor_pitstop'];

		require_once(APPPATH.'views/vendor/autoload.php');
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

		$data5['message'] = "reject".$nomorpitstop;
		$pusher->trigger('my-channel', 'my-event', $data5);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Berhasil!</strong> request kepala regu berhasil ditolak.</div>');
		redirect('c_serviceadvisor/daftarsedangservis/');
	}

	public function acceptrequest($platnomor){
		$this->db->query('INSERT INTO history_part (nama_part, id_history_part, harga) SELECT nama_part, id_request_part, harga FROM request_part WHERE plat_nomor_request = "'.$platnomor.'";');
		$this->db->query('DELETE FROM request_part WHERE plat_nomor_request = "'.$platnomor.'";');
		$data = [
			'catatan_karu' => 'BELUM ADA CATATAN',
			'request_karu' => 'BELUM ADA REQUEST',
		];
		$this->db->where('nomor_polisi', $platnomor);
		$this->db->update('sedang_servis', $data);

		$haruswo = $this->db->get_where('sedang_servis', ['nomor_polisi' => $platnomor])->row_array();
		$nomorpitstop = $haruswo['nomor_pitstop'];

		require_once(APPPATH.'views/vendor/autoload.php');
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

		$data5['message'] = "accept".$nomorpitstop;
		$pusher->trigger('my-channel', 'my-event', $data5);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Berhasil!</strong> request kepala regu berhasil diterima.</div>');
		redirect('c_serviceadvisor/daftarsedangservis/');
	}

	public function acceptselesaiservis($platnomor){
		$data = [
			'konfirmasi' => 'Sudah'
		];
		$this->db->where('nomor_polisi_selesai', $platnomor);
		$this->db->update('telah_servis', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" style="margin-right: 10px;margin-left: 10px;"><strong>Berhasil!</strong> kendaraan telah konfirmasi selesai.</div>');
		redirect('c_serviceadvisor/daftarselesaiservis/');
	}

	public function detailpemeriksaan($platnomor, $tgl){
		$id = $platnomor." - ".$tgl;
		$this->db->select('*');
		$this->db->from('history_pemeriksaan');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$data['res'] = $query->row_array();

		$this->load->view('detailpemeriksaan', $data);
	}

	public function detailfakturservis($platnomor, $tgl){
		$id = $platnomor." - ".$tgl;
		$this->db->select('*');
		$this->db->from('history_workorder');
		$this->db->where('id_history_workorder', $id);
		$query = $this->db->get();
		$data['res'] = $query->row_array();
		$data['tgl'] = $tgl;

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
		$this->db->where('status', 'Dikerjakan');
		$query3 = $this->db->get();
		$data['res3'] = $query3->result_array();

		$this->db->select('*');
		$this->db->from('history_tasklist');
		$this->db->where('id', $id);
		$query4 = $this->db->get();
		$data['res4'] = $query4->row_array();

		$this->load->view('faktur servis', $data);
	}

	public function detailworkorder($platnomor, $tgl){
		$id = $platnomor." - ".$tgl;

		$this->db->select('*');
		$this->db->from('history_workorder');
		$this->db->where('id_history_workorder', $id);
		$query = $this->db->get();
		$data['res'] = $query->row_array();
		$data['tgl'] = $tgl;

		$dataworkorder = $query->row_array();
		$idworkorder = $dataworkorder['paket_servis_wo'];
		// $result = $query->row();
		// $datacek= $result->paket_servis_wo;
		$this->db->select('*');
		$this->db->from('servis');
        $this->db->where('id_servis', $idworkorder);
		$query3 = $this->db->get();
		$data['res3'] = $query3->row_array();

		$this->db->select('*');
		$this->db->from('history_tasklist');
		$this->db->where('id', $id);
		$query2 = $this->db->get();
		$data['res2'] = $query2->row_array();

		$this->db->select('*');
		$this->db->from('history_part');
		$this->db->where('id_history_part', $id);
		$query4 = $this->db->get();
		$data['res4'] = $query4->result_array();

		$this->load->view('detail workorder', $data);
	}

	public function detailqmc($platnomor, $tgl){
		$id = $platnomor." - ".$tgl;

		$this->db->select('*');
		$this->db->from('history_workorder');
		$this->db->where('id_history_workorder', $id);
		$query = $this->db->get();
		$data['res'] = $query->row_array();

		$dataworkorder = $query->row_array();
		$idworkorder = $dataworkorder['paket_servis_wo'];
		$this->db->select('*');
		$this->db->from('servis');
        $this->db->where('id_servis', $idworkorder);
		$query2 = $this->db->get();
		$data['res2'] = $query2->row_array();

		$data['tgl'] = $tgl;

		$jamservis = $query->row_array();
		$variabelestimasi = $jamservis['estimasiselesai'];
		$timestamp = strtotime("$variabelestimasi") - 60*60;
		$data['jammasuk'] = date('H:i:s', $timestamp);

		$this->db->select('*');
		$this->db->from('history_qmc_1');
		$this->db->where('id', $id);
		$query3 = $this->db->get();
		$data['res3'] = $query3->row_array();

		$this->db->select('*');
		$this->db->from('history_qmc_2');
		$this->db->where('id', $id);
		$query4 = $this->db->get();
		$data['res4'] = $query4->row_array();

		$this->db->select('*');
		$this->db->from('history_qmc_3');
		$this->db->where('id', $id);
		$query5 = $this->db->get();
		$data['res5'] = $query5->row_array();

		$this->db->select('*');
		$this->db->from('history_qmc_4');
		$this->db->where('id', $id);
		$query6 = $this->db->get();
		$data['res6'] = $query6->row_array();

		$this->db->select('*');
		$this->db->from('history_qmc_5');
		$this->db->where('id', $id);
		$query7 = $this->db->get();
		$data['res7'] = $query7->row_array();

		$this->db->select('*');
		$this->db->from('history_qmc_6');
		$this->db->where('id', $id);
		$query8 = $this->db->get();
		$data['res8'] = $query8->row_array();

		$this->load->view('detail qmc', $data);
	}
}