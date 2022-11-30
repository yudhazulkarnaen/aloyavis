<?php

class C_manager extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		if (!isset($this->session->userdata['nama'])){
			redirect('');
		}
		if ($this->session->userdata['role'] == 1){
			redirect('c_serviceadvisor');
		}
		if ($this->session->userdata['role'] == 2){
			redirect('c_karu');
		}
        $this->load->helper(array('form', 'url'));
		$this->load->model('m_data');
        $this->load->library(array('form_validation'));
	}

	public function index()
	{
        $data['jmljasaservis'] = $this->m_data->jumlahJasaServis();
        $data['jmlsukucadang'] = $this->m_data->jumlahSukuCadang();
        $data['jmljenisalat'] = $this->m_data->jumlahJenisPart();
        $data['jmlserviceadvisor'] = $this->m_data->jumlahServiceAdvisor();
        $data['jmlkepalaregu'] = $this->m_data->jumlahKepalaRegu();
        $data['jmlteknisi'] = $this->m_data->jumlahTeknisi();
        $data['jmlmobil'] = $this->m_data->jumlahKendaraan();
        $data['jmlsedangservis'] = $this->m_data->jumlahSedangServis();
        $data['jmltelahservis'] = $this->m_data->jumlahTelahServis();
        $data['jmlpaketservis'] = $this->m_data->jumlahPaketServis();
		$this->load->view('home (manager)', $data);
	}

	public function daftarhargaservis()
	{
		if ($this->input->post('submit')) {
			$data['keyword_hargaservis'] = $this->input->post('keyword_hargaservis');
			$this->session->set_userdata('keyword_hargaservis', $data['keyword_hargaservis']);
		} else if($this->session->userdata('keyword_hargaservis')){
			$data['keyword_hargaservis'] = $this->session->userdata('keyword_hargaservis');
		} else {
			$data['keyword_hargaservis'] = "";
		}

		$this->db->distinct();
		$this->db->select('merk_kendaraan, isi_silinder');
		$this->db->from('harga_servis');
		$config['base_url'] = site_url('c_manager/daftarhargaservis');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;

		//initialize
		$this->pagination->initialize($config);


		if ($data['keyword_hargaservis'] != ""){
			$data['wew'] = "<p style='margin-top: -20px;'><strong>Keyword Pencarian = ".$data['keyword_hargaservis']."</strong></p>";
		} else {
			$data['wew'] = "";
		}

		$data['start'] = $this->uri->segment(3);
		$data['res'] = $this->m_data->getHargaservis($config['per_page'],$data['start'],$data['keyword_hargaservis']);

		$this->load->view('daftar harga servis (manager)', $data);
	}

	public function detailhargaservis($merk,$cc)
	{
		$wew = urldecode($merk);

        $this->db->select('*');
		$this->db->from('harga_servis');
		$this->db->join('servis', 'servis.id_servis = harga_servis.id_servis');
        $this->db->where('merk_kendaraan', $wew);
		$this->db->where('isi_silinder', $cc);
		$query = $this->db->get();
		$data['res'] = $query->result_array();

		$data['merk'] = $wew;

		$this->load->view('detail harga servis (manager)', $data);
	}

	public function daftarhargasukucadang()
	{
		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword_sukucadang'] = $this->input->post('keyword_sukucadang');
			$this->session->set_userdata('keyword_sukucadang', $data['keyword_sukucadang']);
		} else if($this->session->userdata('keyword_sukucadang')){
			$data['keyword_sukucadang'] = $this->session->userdata('keyword_sukucadang');
		} else {
			$data['keyword_sukucadang'] = "";
		}

		// config
		$this->db->like('nama_parts',$data['keyword_sukucadang']);
		$this->db->from('parts');
		$config['base_url'] = site_url('c_manager/daftarhargasukucadang');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;

		//initialize
		$this->pagination->initialize($config);


		if ($data['keyword_sukucadang'] != ""){
			$data['wew'] = "<p style='margin-top: -20px;'><strong>Keyword Pencarian = ".$data['keyword_sukucadang']."</strong></p>";
		} else {
			$data['wew'] = "";
		}

		$data['start'] = $this->uri->segment(3);
		$data['res'] = $this->m_data->getSukucadang($config['per_page'],$data['start'],$data['keyword_sukucadang']);

		$this->load->view('daftar harga suku cadang (manager)', $data);
	}

	public function daftarperalatanservis()
	{
		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword_peralatan'] = $this->input->post('keyword_peralatan');
			$this->session->set_userdata('keyword_peralatan', $data['keyword_peralatan']);
		} else if($this->session->userdata('keyword_peralatan')){
			$data['keyword_peralatan'] = $this->session->userdata('keyword_peralatan');
		} else {
			$data['keyword_peralatan'] = "";
		}

		// config
		$this->db->select("*,
		WHEN singkatan_alat = 'pistonringcompressor' THEN 100
		WHEN singkatan_alat = 'pistonringexpander' THEN 100
        WHEN singkatan_alat = 'valvespringcompressor' THEN 100
        WHEN singkatan_alat = 'oilfilterremover' THEN 100
        WHEN singkatan_alat = 'oilsealpuller' THEN 100
        WHEN singkatan_alat = 'bearingcuppuller' THEN 100
        WHEN singkatan_alat = 'universalpuller' THEN 100
        WHEN singkatan_alat = 'clutchcentralaligningtool' THEN 100
        WHEN singkatan_alat = 'bearingpullerattachment' THEN 100
        WHEN singkatan_alat = 'slidinghammer' THEN 100
        WHEN singkatan_alat = 'discbrakepistontool' THEN 100
        WHEN singkatan_alat = 'coilspringcompressor' THEN 100
        WHEN singkatan_alat = 'balljointseparator' THEN 100
        WHEN singkatan_alat = 'tierodremover' THEN 100
        WHEN singkatan_alat = 'differentialflangeholder' THEN 100
        WHEN singkatan_alat = 'impactdriver' THEN 100
        WHEN singkatan_alat = 'carlift' THEN 100
        WHEN singkatan_alat = 'enginestand' THEN 100
        WHEN singkatan_alat = 'mesinlas' THEN 100
        WHEN singkatan_alat = 'airgun' THEN 100
		ELSE NULL
		END AS jumlah", FALSE);

		$this->db->like('nama_alat',$data['keyword_peralatan']);
		$this->db->from('daftar_peralatan');
		$config['base_url'] = site_url('c_manager/daftarperalatanservis');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;

		//initialize
		$this->pagination->initialize($config);


		if ($data['keyword_peralatan'] != ""){
			$data['wew'] = "<p style='margin-top: -20px;'><strong>Keyword Pencarian = ".$data['keyword_peralatan']."</strong></p>";
		} else {
			$data['wew'] = "";
		}

		$data['start'] = $this->uri->segment(3);
		$data['res'] = $this->m_data->getPeralatan($config['per_page'],$data['start'],$data['keyword_peralatan']);

		$this->load->view('daftar peralatan servis (manager)', $data);
	}

	public function daftarserviceadvisor()
	{
		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword_serviceadvisor'] = $this->input->post('keyword_serviceadvisor');
			$this->session->set_userdata('keyword_serviceadvisor', $data['keyword_serviceadvisor']);
		} else if($this->session->userdata('keyword_serviceadvisor')){
			$data['keyword_serviceadvisor'] = $this->session->userdata('keyword_serviceadvisor');
		} else {
			$data['keyword_serviceadvisor'] = "";
		}

		// config
		$this->db->select("min(id_dikerjakanoleh) as food_id, nip, nama, handphone, serviceadvisor, count(*) as duplicate_value", FALSE);
		$this->db->join('users', 'users.nama = dikerjakan_oleh.serviceadvisor');
		$this->db->group_by("serviceadvisor");
		$this->db->like('serviceadvisor',$data['keyword_serviceadvisor']);
		$this->db->from('dikerjakan_oleh');
		$config['base_url'] = site_url('c_manager/daftarserviceadvisor');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;

		//initialize
		$this->pagination->initialize($config);


		if ($data['keyword_serviceadvisor'] != ""){
			$data['wew'] = "<p style='margin-top: -20px;'><strong>Keyword Pencarian = ".$data['keyword_serviceadvisor']."</strong></p>";
		} else {
			$data['wew'] = "";
		}

		$data['start'] = $this->uri->segment(3);
		$data['res'] = $this->m_data->getServiceadvisor($config['per_page'],$data['start'],$data['keyword_serviceadvisor']);

		$this->load->view('daftar service advisor (manager)', $data);
	}

	public function historypekerjaanserviceadvisor($nama){
		$wew = urldecode($nama);

		$query = $this->db->query("SELECT * FROM `dikerjakan_oleh` JOIN `telah_servis` ON telah_servis.id = dikerjakan_oleh.id_dikerjakanoleh WHERE serviceadvisor = '$wew';");
		$data['res'] = $query->result_array();
		$data['nama'] = $wew;
		$this->load->view('history pekerjaan service advisor (manager)', $data);
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
		$this->session->unset_userdata('keyword_sukucadang');
		$this->session->unset_userdata('keyword_hargaservis');
		$this->session->unset_userdata('keyword_peralatan');
		$this->session->unset_userdata('keyword_serviceadvisor');
		$this->session->unset_userdata('keyword_teknisi');
		$this->session->unset_userdata('keyword_kepalaregu');
		$this->session->unset_userdata('keyword_platnomor');
		$this->session->unset_userdata('keyword_sedangservis');
		$this->session->unset_userdata('keyword_selesaiservis');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been logout.</div>');
		redirect('');
	}

	public function detailpemeriksaan($platnomor, $tgl){
		$id = $platnomor." - ".$tgl;
		$this->db->select('*');
		$this->db->from('history_pemeriksaan');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$data['res'] = $query->row_array();

		$this->load->view('detailpemeriksaan (manager)', $data);
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

		$this->db->select('*');
		$this->db->from('history_pemeriksaan');
		$this->db->where('id', $id);
		$query5 = $this->db->get();
		$data['res5'] = $query5->row_array();

		$this->load->view('detail workorder (manager)', $data);
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

		$this->db->select('*');
		$this->db->from('history_pemeriksaan');
		$this->db->where('id', $id);
		$query9 = $this->db->get();
		$data['res9'] = $query9->row_array();

		$this->load->view('detail qmc (manager)', $data);
	}

	public function daftarkepalaregu()
	{
        // $this->db->select('*');
		// $this->db->from('users');
		// $this->db->where('role', 1);
		// $query = $this->db->query("select *, count(*) as duplicate_value from dikerjakan_oleh JOIN users ON users.nama = dikerjakan_oleh.kepalaregu group by kepalaregu;");
		// $data['res'] = $query->result_array();

		$data['jmlkepalaregu'] = $this->m_data->jumlahKepalaRegu();

		// $this->load->view('daftar kepala regu (manager)', $data);

		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword_kepalaregu'] = $this->input->post('keyword_kepalaregu');
			$this->session->set_userdata('keyword_kepalaregu', $data['keyword_kepalaregu']);
		} else if($this->session->userdata('keyword_kepalaregu')){
			$data['keyword_kepalaregu'] = $this->session->userdata('keyword_kepalaregu');
		} else {
			$data['keyword_kepalaregu'] = "";
		}

		// config
		// $this->db->select("u.nama, u.nip, u.handphone, u.nomor_pitstop, d.teknisi_a, d.teknisi_b, count(*) as duplicate_value", FALSE);
		// $this->db->join('users', 'users.nama = dikerjakan_oleh.kepalaregu');
		// $this->db->group_by("kepalaregu");
		// $this->db->like('kepalaregu',$data['keyword_kepalaregu']);
		// $this->db->where('d.kepalaregu', 'u.nama');
		// $this->db->from('dikerjakan_oleh d, users u');
		// $keyword = $data['keyword_kepalaregu'];
		// $this->db->query("select *, count(*) as duplicate_value from dikerjakan_oleh JOIN users ON users.nama = dikerjakan_oleh.kepalaregu WHERE kepalaregu LIKE 'Kepala Regu w' group by kepalaregu;");
		$config['base_url'] = site_url('c_manager/daftarkepalaregu');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;

		//initialize
		$this->pagination->initialize($config);


		if ($data['keyword_kepalaregu'] != ""){
			$data['wew'] = "<p style='margin-top: -20px;'><strong>Keyword Pencarian = ".$data['keyword_kepalaregu']."</strong></p>";
		} else {
			$data['wew'] = "";
		}

		$data['start'] = $this->uri->segment(3);
		$data['res'] = $this->m_data->getKepalaregu($config['per_page'],$data['start'],$data['keyword_kepalaregu']);

		$this->load->view('daftar kepala regu (manager)', $data);
	}

	public function historypekerjaankepalaregu($nama){
		$wew = urldecode($nama);

		$query = $this->db->query("SELECT * FROM `dikerjakan_oleh` JOIN `telah_servis` ON telah_servis.id = dikerjakan_oleh.id_dikerjakanoleh WHERE kepalaregu = '$wew';");
		$data['res'] = $query->result_array();
		$data['nama'] = $wew;
		$this->load->view('history pekerjaan kepala regu (manager)', $data);
	}

	public function daftarteknisi()
	{
        // $this->db->select('*');
		// $this->db->from('users');
		// $this->db->where('role', 1);
		// $query = $this->db->query("select u.nomor_pitstop, u.handphone, u.nama, u.nip, d.teknisi_a, d.teknisi_b, count(*) as duplicate_value from dikerjakan_oleh d, users u WHERE d.teknisi_a = u.teknisi_a group by d.teknisi_a;");
		// $data['res'] = $query->result_array();

		$data['jmlteknisi'] = $this->m_data->jumlahTeknisi();

		// $this->load->view('daftar teknisi (manager)', $data);

		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword_teknisi'] = $this->input->post('keyword_teknisi');
			$this->session->set_userdata('keyword_teknisi', $data['keyword_teknisi']);
		} else if($this->session->userdata('keyword_teknisi')){
			$data['keyword_teknisi'] = $this->session->userdata('keyword_teknisi');
		} else {
			$data['keyword_teknisi'] = "";
		}

		$config['base_url'] = site_url('c_manager/daftarteknisi');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;

		//initialize
		$this->pagination->initialize($config);


		if ($data['keyword_teknisi'] != ""){
			$data['wew'] = "<p style='margin-top: -20px;'><strong>Keyword Pencarian = ".$data['keyword_teknisi']."</strong></p>";
		} else {
			$data['wew'] = "";
		}

		$data['start'] = $this->uri->segment(3);
		$data['res'] = $this->m_data->getTeknisi($config['per_page'],$data['start'],$data['keyword_teknisi']);

		$this->load->view('daftar teknisi (manager)', $data);
	}

	public function historypekerjaanteknisi_a($nama){
		$wew = urldecode($nama);

		$query = $this->db->query("SELECT * FROM `dikerjakan_oleh` JOIN `telah_servis` ON telah_servis.id = dikerjakan_oleh.id_dikerjakanoleh WHERE teknisi_a = '$wew';");
		$data['res'] = $query->result_array();
		$data['nama'] = $wew;
		$this->load->view('history pekerjaan teknisi (manager)', $data);
	}

	public function historypekerjaanteknisi_b($nama){
		$wew = urldecode($nama);

		$query = $this->db->query("SELECT * FROM `dikerjakan_oleh` JOIN `telah_servis` ON telah_servis.id = dikerjakan_oleh.id_dikerjakanoleh WHERE teknisi_b = '$wew';");
		$data['res'] = $query->result_array();
		$data['nama'] = $wew;
		$this->load->view('history pekerjaan teknisi (manager)', $data);
	}

	public function daftarkendaraan(){
		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword_platnomor'] = $this->input->post('keyword_platnomor');
			$this->session->set_userdata('keyword_platnomor', $data['keyword_platnomor']);
		} else if($this->session->userdata('keyword_platnomor')){
			$data['keyword_platnomor'] = $this->session->userdata('keyword_platnomor');
		} else {
			$data['keyword_platnomor'] = "";
		}

		// config
		$this->db->select('*');
		$this->db->like('nomor_polisi',$data['keyword_platnomor']);
		$this->db->from('mobil');
		$config['base_url'] = site_url('c_manager/daftarkendaraan');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;

		//initialize
		$this->pagination->initialize($config);


		if ($data['keyword_platnomor'] != ""){
			$data['wew'] = "<p style='margin-top: -20px;'><strong>Keyword Pencarian = ".$data['keyword_platnomor']."</strong></p>";
		} else {
			$data['wew'] = "";
		}

		$data['start'] = $this->uri->segment(3);
		$data['res'] = $this->m_data->getKendaraan($config['per_page'],$data['start'],$data['keyword_platnomor']);

		$this->load->view('daftar kendaraan (manager)', $data);
	}

	public function informasipemilik($nopol){
		$this->db->select('*');
		$this->db->from('mobil');
		$this->db->where('nomor_polisi', $nopol);
		$query = $this->db->get();
		$data['res'] = $query->row_array();

		$this->load->view('informasi pemilik (manager)', $data);
	}

	public function daftarsedangservis(){
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
		$config['base_url'] = site_url('c_manager/daftarsedangservis');
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

		$this->load->view('daftar sedang servis (manager)', $data);
	}

	public function daftarselesaiservis()
	{
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
		$config['base_url'] = site_url('c_manager/daftarselesaiservis');
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

		$this->load->view('daftar selesai servis (manager)', $data);
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

		$this->load->view('faktur service (manager)', $data);
	}

	public function daftarpaketservis()
	{
		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword_paketservis'] = $this->input->post('keyword_paketservis');
			$this->session->set_userdata('keyword_paketservis', $data['keyword_paketservis']);
		} else if($this->session->userdata('keyword_paketservis')){
			$data['keyword_paketservis'] = $this->session->userdata('keyword_paketservis');
		} else {
			$data['keyword_paketservis'] = "";
		}

		// config
		$this->db->select('*');
		$this->db->like('nama_servis',$data['keyword_paketservis']);
		$this->db->from('servis');
		$config['base_url'] = site_url('c_manager/daftarpaketservis');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 13;

		//initialize
		$this->pagination->initialize($config);


		if ($data['keyword_paketservis'] != ""){
			$data['wew'] = "<p style='margin-top: -20px;'><strong>Keyword Pencarian = ".$data['keyword_paketservis']."</strong></p>";
		} else {
			$data['wew'] = "";
		}

		$data['start'] = $this->uri->segment(3);
		$data['res'] = $this->m_data->getPaketservis($config['per_page'],$data['start'],$data['keyword_paketservis']);

		$this->load->view('daftar paket servis (manager)', $data);
	}

	public function detailkegiatanservis($id)
	{
		$this->db->select('*');
		$this->db->from('kegiatan_servis');
		$this->db->join('servis', 'servis.id_servis = kegiatan_servis.id_kegiatan_servis');
		$this->db->where('id_kegiatan_servis', $id);
		$query = $this->db->get();
		$data['res'] = $query->row_array();

		$this->load->view('detail pekerjaan servis', $data);
	}

	public function detailalatdigunakan($id)
	{
		$this->db->select('*');
		$this->db->from('alat_untuk_servis');
		$this->db->join('servis', 'servis.id_servis = alat_untuk_servis.id_servis_alat');
		$this->db->where('id_servis_alat', $id);
		$query = $this->db->get();
		$data['res'] = $query->row_array();

		$this->load->view('detail alat digunakan (manager)', $data);
	}

	function gantipassword()
    {
		$this->form_validation->set_rules('oldpassword', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password Baru', 'required|trim|matches[password2]');
		$this->form_validation->set_rules('password2', 'Ulangi Password Baru', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false) {
			$this->load->view('ganti password (manager)');
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
				redirect('c_manager/gantipassword');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong old password!</div>');
				redirect('c_manager/gantipassword');
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

		$this->load->view('profil (manager)', $data);
    }
}