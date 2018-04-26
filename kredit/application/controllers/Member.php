<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_login');
		}
	

	public function index(){

		if($this->session->userdata('status') != "login"){
   redirect(base_url("member/login"));
  			}

  		$data['customer'] = $this->Mod_login->jml_penyicil()->num_rows();
  		$data['barang'] = $this->Mod_login->jml_barang()->num_rows();
  		$data['content'] = 'member/page';
  		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
  		$data['sub'] = 'Member';
  		
		$this->load->view('member/dashboard', $data);

	}


	public function login(){
		$this->load->view('mLogin');
	}


	public function dologin(){

		$username = $this->input->post('email');
		$passwd = $this->input->post('password');
		$where = array(
			'email' => $username,
			'password' => $passwd
		);
		
		
		$cek = $this->Mod_login->ceklogin("mmber",$where)->num_rows();
		if ($cek > 0) {
			$datasession = array(
				'nama' => $username,
				'status' => "login", 
				'level'	=> "member"
				
			);
			$this->session->set_userdata($datasession);
			redirect('member');
			// echo "<pre>";
			// print_r($datasession);
			// echo "</pre>";

		}else{
echo "<script type='text/javascript'>
               alert ('Maaf Username Dan Password Anda Salah !');
               window.location.href = 'login';
      </script>";
		}
	}


	public function daftar_member(){ 
		$this->load->view('daftar');
	}

	public function add_member(){

		
		if (!empty($_POST)) {
			$data = array(
				'nik' => '',
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'nohp' => $this->input->post('telp'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('passwd'),
				'level' => $this->input->post('level')
			);
			$this->Mod_login->add_member($data);
			
		}
		redirect('member');

	}

	public function help(){
		if($this->session->userdata('status') != "login"){
   				redirect(base_url("member/login"));
  			}

  		$data['customer'] = $this->Mod_login->jml_penyicil()->num_rows();
  		$data['barang'] = $this->Mod_login->jml_barang()->num_rows();
  		$data['content'] = 'member/help';
  		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
  		$data['sub'] = 'Bantuan';
		$this->load->view('member/dashboard', $data);

	}

	public function personal(){

		if($this->session->userdata('status') != "login"){
   				redirect(base_url("member/login"));
  			}

  		$sesi = $this->session->userdata('nama');
  		$data['rows'] = $this->db->query("SELECT * FROM mmber WHERE email='$sesi'")->row_array();
  		$data['customer'] = $this->Mod_login->jml_penyicil()->num_rows();
  		$data['profile'] = $this->Mod_login->show_profile()->result();
  		$data['content'] = 'member/personal';
  		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
  		// $data['sesi'] = $this->session->userdata('nama');
  		$data['sub'] = 'Personal';

		$this->load->view('member/dashboard', $data);
	}

	public function kreditan(){
		if($this->session->userdata('status') != "login"){
   				redirect(base_url("member/login"));
  			}

  		$sesi = $this->session->userdata('nama');
  		$data['rows'] = $this->db->query("SELECT * FROM mmber WHERE email='$sesi'")->row_array();
  		$data['customer'] = $this->Mod_login->jml_penyicil()->num_rows();
  		$data['profile'] = $this->Mod_login->show_profile()->result();
  		$data['content'] = 'member/kreditan';
  		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
  		// $data['sesi'] = $this->session->userdata('nama');
  		$data['sub'] = 'Kredit';

		$this->load->view('member/dashboard', $data);
	}


	public function about(){
		if($this->session->userdata('status') != "login"){
   				redirect(base_url("member/login"));
  			}

  		$data['customer'] = $this->Mod_login->jml_penyicil()->num_rows();
  		$data['barang'] = $this->Mod_login->jml_barang()->num_rows();
  		$data['content'] = 'member/about';
  		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
  		$data['sub'] = 'About';
		$this->load->view('member/dashboard', $data);
	}
	
	


	public function logout(){
		$this->session->sess_destroy();
		redirect('member/login');
	}
}
