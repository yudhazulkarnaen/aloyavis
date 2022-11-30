<?php

class C_guest extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
		if(isset($this->session->userdata['role'])) {
			if ($this->session->userdata['role'] == 2){
				redirect('c_karu');
			}
			if ($this->session->userdata['role'] == 1){
				redirect('c_serviceadvisor');
			}
			if ($this->session->userdata['role'] == 3){
				redirect('c_manager');
			}
		}
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
		if ($this->form_validation->run() == false) {
			$this->load->view('login (guest)');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->db->get_where('users', ['username' => $username])->row_array();

			if ($user) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username'],
						'nama' => $user['nama'],
						'nip' => $user['nip'],
						'handphone' => $user['handphone'],
						'role' => $user['role'],
						'teknisi_a' => $user['teknisi_a'],
						'teknisi_b' => $user['teknisi_b'],
						'nomor_pitstop' => $user['nomor_pitstop'],
					];
					$this->session->set_userdata($data);
					if ($user['role'] == 1) {
						redirect('c_serviceadvisor');
					} else if ($user['role'] == 2) {
						redirect('c_karu');
					} else if ($user['role'] == 3) {
						redirect('c_manager');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><span><strong>Username atau Password yang anda masukan salah</strong>.</span></div>');
					redirect('');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><span><strong>Username belum terdaftar. Harap hubungi admin untuk mendaftar</strong>.</span></div>');
				redirect('');
			}
		}
	}
}