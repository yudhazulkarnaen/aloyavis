<?php 
 
class M_data extends CI_Model{

	public function getAllAntrian()
	{
		$date = date("Y:m:d");
		$this->db->join('mobil', 'mobil.nomor_polisi = antrian.plat_nomor');
		$this->db->order_by("no_antrian", "asc");
		$this->db->where('tgl_antrian', $date);
		$this->db->where('no_antrian >', 0);
		return $this->db->get('antrian')->result_array();
	}

	public function getAllAntrianNew()
	{
		$date = date("Y:m:d");
		$this->db->join('mobil', 'mobil.nomor_polisi = antrian.plat_nomor');
		$this->db->order_by("no_antrian", "asc");
		$this->db->where('tgl_antrian', $date);
		// $this->db->where('no_antrian >', 0);
		return $this->db->get('antrian')->result_array();
	}

	public function getAllSedangServis()
	{
		return $this->db->get('sedang_servis')->result_array();
	}

	public function getAllTelahServis()
	{
		return $this->db->get('telah_servis')->result_array();
	}

	public function jumlahSedangServis()
	{
		return $this->db->from("sedang_servis")->count_all_results();
	}

	public function jumlahJasaServis()
	{
		return $this->db->from("harga_servis")->count_all_results();
	}

	public function jumlahSukuCadang()
	{
		return $this->db->from("parts")->count_all_results();
	}

	public function jumlahJenisPart()
	{
		$result = 20;
		// $count = $result['COUNT(*)'];
		// $mustreturn = $count-1;
		return $result;
	}

	public function jumlahServiceAdvisor()
	{
		$query = $this->db->query('SELECT * FROM users WHERE `role` = 1');
		return $query->num_rows();
	}

	public function jumlahKepalaRegu()
	{
		$query = $this->db->query('SELECT * FROM users WHERE `role` = 2');
		return $query->num_rows();
	}

	public function jumlahTeknisi()
	{
		$query = $this->db->query('SELECT * FROM users WHERE `role` = 2');
		return $query->num_rows()*2;
	}

	public function jumlahKendaraan()
	{
		$query = $this->db->query('SELECT * FROM mobil');
		return $query->num_rows();
	}

	public function jumlahTelahServis()
	{
		return $this->db->from("telah_servis")->count_all_results();
	}

	public function jumlahAntrian()
	{
		return $this->db->from("antrian")->count_all_results();
	}

	public function jumlahPaketServis()
	{
		return $this->db->from("servis")->count_all_results();
	}

	public function cancelAntrian($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function updateAntrian($jumlahAntrian, $no_antrian)
	{
		if($no_antrian > 3){
			$this->db->query('UPDATE antrian SET `no_antrian` = `no_antrian` - 1 WHERE `no_antrian` > '.$no_antrian.';');
		}
		if($no_antrian < 4){
			$this->db->query('UPDATE antrian SET `no_antrian` = '.$no_antrian.' WHERE `no_antrian` = 4;');
			$this->db->query('UPDATE antrian SET `no_antrian` = `no_antrian` - 1 WHERE `no_antrian` > 3;');
		}

		$jam_servis=array();

		for ($x = 8; $x <= 17; $x++) { //jam buka dan jam tutup
			$time = strtotime("$x:00:00");
			$newformat = date('H:i:s',$time);
			for ($a = 1; $a <= 3; $a++) { //jumlah pitstop
				array_push($jam_servis,$newformat);
			}
		}
		
		$jumlah_array = count($jam_servis);
		$jumlah_remove = $jumlah_array-$jumlahAntrian;
		
		$z = $jumlah_remove;
		$y = $jumlah_remove;
		for ($x = 1; $x <= $jumlah_remove; $x++) {
			array_pop($jam_servis);
			}
		$abc = $jumlahAntrian;
		foreach($jam_servis as $updatejam) {
			$this->db->order_by("no_antrian", "desc");
			$this->db->set('jam_servis', $updatejam);
			$this->db->limit($abc);
			$this->db->update('antrian');
			$abc = $abc-1;
	}
	}
	function get_servis(){
		$hasil=$this->db->query("SELECT * FROM servis");
		return $hasil;
	}

	public function get_sedang_servis()
	{
		$nomorpitstop = $this->session->userdata('nomor_pitstop');
		$this->db->select('*');
		$this->db->from('sedang_servis');
        $this->db->where('nomor_pitstop', $nomorpitstop);
		$query = $this->db->get();
		return $query;
	}

	public function get_history_part($platnomor)
	{
		$id = $platnomor." - ".date("Y-m-d");
		$this->db->select('*');
		$this->db->from('history_part');
        $this->db->where('id_history_part', $id);
		$query = $this->db->get();
		return $query;
	}

	function get_subkategori($id, $merk){
		$hasil=$this->db->query("SELECT * FROM `kegiatan_servis` JOIN harga_servis ON harga_servis.id_servis = kegiatan_servis.id_kegiatan_servis JOIN alat_untuk_servis ON alat_untuk_servis.id_servis_alat = kegiatan_servis.id_kegiatan_servis JOIN alat_servis_tersedia ON alat_servis_tersedia.id_alat_tersedia = alat_untuk_servis.id_servis_alat WHERE id_servis = '$id' AND merk_kendaraan = '$merk';");
		return $hasil->result();
	}

	function get_jamAntrianPertama(){
		$query = $this->db->query("SELECT jam_servis FROM `antrian` WHERE no_antrian=1");
		$ret = $query->row();
		return $ret->jam_servis;
	}

	public function getParts($name, $fieldName){
		if (empty($fieldName)){
			$fieldName = 'name';
		}

		$name = strtolower(trim($name));

		$query = $this->db
		->select('nama_parts, harga')
		->from('parts')
		->where("LOWER($fieldName) LIKE '$name%'")
		->limit(25)
		->get();

		return $query->result_array();
	}

	public function pusyang($goo, $nomorpolisi, $gooo){
		$id = $nomorpolisi." - ".date("Y-m-d");
		$data = array(
			'nama_part' => $goo,
			'plat_nomor_request' => $nomorpolisi,
			'id_request_part' => $id,
			'harga' => $gooo,
		);
		$this->db->insert('request_part', $data);
	}

	public function get_notification()
	{
		$this->db->select('*');
		$this->db->from('sedang_servis');
        $this->db->where('request_karu', 'ADA REQUEST');
		$query = $this->db->get();
		return $query;
	}

	public function get_selesaiservis()
	{
		$this->db->select('*');
		$this->db->from('telah_servis');
        $this->db->where('konfirmasi', 'Belum');
		$query = $this->db->get();
		return $query;
	}

	public function getSukucadang($limit,$start,$keyword = null){
    	if ($keyword) {
    		$this->db->like('nama_parts',$keyword);
    	}
        // $this->db->join('users', 'users.nik = project.nikpicam');
        $this->db->order_by('nama_parts', 'ASC');
    	return $this->db->get('parts',$limit,$start)->result_array();
    }

	public function getHargaservis($limit,$start,$keyword = null){
		$this->db->distinct();
		$this->db->select('merk_kendaraan, isi_silinder');
    	if ($keyword) {
    		$this->db->like('merk_kendaraan',$keyword);
    	}
        // $this->db->join('users', 'users.nik = project.nikpicam');
		
        $this->db->order_by('merk_kendaraan', 'ASC');
    	return $this->db->get('harga_servis',$limit,$start)->result_array();
    }

	public function getPeralatan($limit,$start,$keyword = null){
		$this->db->select('*');
		$this->db->from('alat_servis_tersedia');
		$this->db->where('id_alat_tersedia', 1);
		$query = $this->db->get();
		$dataworkorder = $query->row_array();
		$pistonringcompressor = $dataworkorder['pistonringcompressor_jml'];
		$pistonringexpander = $dataworkorder['pistonringexpander_jml'];
		$valvespringcompressor = $dataworkorder['valvespringcompressor_jml'];
		$oilfilterremover = $dataworkorder['oilfilterremover_jml'];
		$oilsealpuller = $dataworkorder['oilsealpuller_jml'];
		$bearingcuppuller = $dataworkorder['bearingcuppuller_jml'];
		$universalpuller = $dataworkorder['universalpuller_jml'];
		$clutchcentralaligningtool = $dataworkorder['clutchcentralaligningtool_jml'];
		$bearingpullerattachment = $dataworkorder['bearingpullerattachment_jml'];
		$slidinghammer = $dataworkorder['slidinghammer_jml'];
		$discbrakepistontool = $dataworkorder['discbrakepistontool_jml'];
		$coilspringcompressor = $dataworkorder['coilspringcompressor_jml'];
		$balljointseparator = $dataworkorder['balljointseparator_jml'];
		$tierodremover = $dataworkorder['tierodremover_jml'];
		$differentialflangeholder = $dataworkorder['differentialflangeholder_jml'];
		$impactdriver = $dataworkorder['impactdriver_jml'];
		$carlift = $dataworkorder['carlift_jml'];
		$enginestand = $dataworkorder['enginestand_jml'];
		$mesinlas = $dataworkorder['mesinlas_jml'];
		$airgun = $dataworkorder['airgun_jml'];


		$this->db->select("*,
		CASE
		WHEN singkatan_alat = 'pistonringcompressor' THEN $pistonringcompressor
		WHEN singkatan_alat = 'pistonringexpander' THEN $pistonringexpander
        WHEN singkatan_alat = 'valvespringcompressor' THEN $valvespringcompressor
        WHEN singkatan_alat = 'oilfilterremover' THEN $oilfilterremover
        WHEN singkatan_alat = 'oilsealpuller' THEN $oilsealpuller
        WHEN singkatan_alat = 'bearingcuppuller' THEN $bearingcuppuller
        WHEN singkatan_alat = 'universalpuller' THEN $universalpuller
        WHEN singkatan_alat = 'clutchcentralaligningtool' THEN $clutchcentralaligningtool
        WHEN singkatan_alat = 'bearingpullerattachment' THEN $bearingpullerattachment
        WHEN singkatan_alat = 'slidinghammer' THEN $slidinghammer
        WHEN singkatan_alat = 'discbrakepistontool' THEN $discbrakepistontool
        WHEN singkatan_alat = 'coilspringcompressor' THEN $coilspringcompressor
        WHEN singkatan_alat = 'balljointseparator' THEN $balljointseparator
        WHEN singkatan_alat = 'tierodremover' THEN $tierodremover
        WHEN singkatan_alat = 'differentialflangeholder' THEN $differentialflangeholder
        WHEN singkatan_alat = 'impactdriver' THEN $impactdriver
        WHEN singkatan_alat = 'carlift' THEN $carlift
        WHEN singkatan_alat = 'enginestand' THEN $enginestand
        WHEN singkatan_alat = 'mesinlas' THEN $mesinlas
        WHEN singkatan_alat = 'airgun' THEN $airgun
		ELSE NULL
		END AS jumlah", FALSE);

    	if ($keyword) {
    		$this->db->like('nama_alat',$keyword);
    	}
        // $this->db->join('users', 'users.nik = project.nikpicam');
        $this->db->order_by('nama_alat', 'ASC');
    	return $this->db->get('daftar_peralatan',$limit,$start)->result_array();
    }

	public function getServiceadvisor($limit,$start,$keyword = null){
		$this->db->select("min(id_dikerjakanoleh) as food_id, nip, nama, handphone, serviceadvisor, count(*) as duplicate_value", FALSE);
		$this->db->join('users', 'users.nama = dikerjakan_oleh.serviceadvisor');
		$this->db->group_by("serviceadvisor");
    	if ($keyword) {
    		$this->db->like('serviceadvisor',$keyword);
    	}
        // $this->db->join('users', 'users.nik = project.nikpicam');
        $this->db->order_by('serviceadvisor', 'ASC');
    	return $this->db->get('dikerjakan_oleh',$limit,$start)->result_array();
    }

	public function getKepalaregu($limit,$start,$keyword = null){
		// $this->db->select("u.nama, u.nip, u.handphone, u.nomor_pitstop, d.teknisi_a, d.teknisi_b, count(*) as duplicate_value", FALSE);
		// $this->db->join('users', 'users.nama = dikerjakan_oleh.kepalaregu');
		// $this->db->group_by("kepalaregu");
    	if ($keyword) {
    		return $this->db->query("select *, count(*) as duplicate_value from dikerjakan_oleh JOIN users ON users.nama = dikerjakan_oleh.kepalaregu WHERE kepalaregu LIKE '%$keyword%' group by kepalaregu;")->result_array();
    	} else {
			return $this->db->query("select *, count(*) as duplicate_value from dikerjakan_oleh JOIN users ON users.nama = dikerjakan_oleh.kepalaregu group by kepalaregu;")->result_array();
		}
		// $this->db->where(`d.kepalaregu`,  `u.nama`);
		// $this->db->from('dikerjakan_oleh d, users u');
        // $this->db->join('users', 'users.nik = project.nikpicam');
        // $this->db->order_by('kepalaregu', 'ASC');
    	// return $this->db->get('dikerjakan_oleh',$limit,$start)->result_array();
    }

	public function getTeknisi($limit,$start,$keyword = null){
		// $this->db->select("u.nama, u.nip, u.handphone, u.nomor_pitstop, d.teknisi_a, d.teknisi_b, count(*) as duplicate_value", FALSE);
		// $this->db->join('users', 'users.nama = dikerjakan_oleh.kepalaregu');
		// $this->db->group_by("kepalaregu");
    	if ($keyword) {
    		return $this->db->query("select u.nomor_pitstop, u.handphone, u.nama, u.nip, d.teknisi_a, d.teknisi_b, count(*) as duplicate_value from dikerjakan_oleh d, users u WHERE d.teknisi_a = u.teknisi_a AND d.teknisi_a LIKE '%$keyword%' group by d.teknisi_a;")->result_array();
    	} else {
			return $this->db->query("select u.nomor_pitstop, u.handphone, u.nama, u.nip, d.teknisi_a, d.teknisi_b, count(*) as duplicate_value from dikerjakan_oleh d, users u WHERE d.teknisi_a = u.teknisi_a group by d.teknisi_a;")->result_array();
		}
		// $this->db->where(`d.kepalaregu`,  `u.nama`);
		// $this->db->from('dikerjakan_oleh d, users u');
        // $this->db->join('users', 'users.nik = project.nikpicam');
        // $this->db->order_by('kepalaregu', 'ASC');
    	// return $this->db->get('dikerjakan_oleh',$limit,$start)->result_array();
    }

	public function getKendaraan($limit,$start,$keyword = null){
    	if ($keyword) {
    		$this->db->like('nomor_polisi',$keyword);
    	}
        // $this->db->join('users', 'users.nik = project.nikpicam');
        $this->db->order_by('nomor_polisi', 'ASC');
    	return $this->db->get('mobil',$limit,$start)->result_array();
    }

	public function getSedangservis($limit,$start,$keyword = null){
		$this->db->select('*');
    	if ($keyword) {
    		$this->db->like('nomor_polisi',$keyword);
    	}
		$this->db->join('antrian', 'antrian.plat_nomor = sedang_servis.nomor_polisi');
        $this->db->order_by('nomor_pitstop', 'ASC');
    	return $this->db->get('sedang_servis',$limit,$start)->result_array();
    }

	public function getSelesaiservis($limit,$start,$keyword = null){
		$this->db->select('*');
    	if ($keyword) {
    		$this->db->like('nomor_polisi_selesai',$keyword);
    	}
        $this->db->order_by('tgl', 'DESC');
    	return $this->db->get('telah_servis',$limit,$start)->result_array();
    }

	public function getPaketservis($limit,$start,$keyword = null){
		$this->db->select('*');
    	if ($keyword) {
    		$this->db->like('nama_servis',$keyword);
    	}
        $this->db->order_by('id_servis', 'ASC');
    	return $this->db->get('servis',$limit,$start)->result_array();
    }

	public function getDaftarantrian($limit,$start,$keyword = null){
		$date = date("Y:m:d");
		$this->db->select('*');
    	if ($keyword) {
    		$this->db->like('plat_nomor',$keyword);
    	}
		$this->db->join('mobil', 'mobil.nomor_polisi = antrian.plat_nomor');
		$this->db->order_by("no_antrian", "asc");
		$this->db->where('tgl_antrian', $date);
    	return $this->db->get('antrian',$limit,$start)->result_array();
    }
}