<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_login');
		}
	

	public function index(){

		if($this->session->userdata('status') != "login"){
   redirect(base_url("admin/login"));
  			}

  		$data['customer'] = $this->Mod_login->jml_penyicil()->num_rows();
  		$data['barang'] = $this->Mod_login->jml_barang()->num_rows();
  		$data['content'] = 'content/utama';
  		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
  		$data['sub'] = 'Utama';
		$this->load->view('dashboard', $data);

	}


	public function login(){
		$this->load->view('Login');
	}


	public function dologin(){
		$username = $this->input->post('username');
		$passwd = $this->input->post('password');
		$where = array(
			'nm_user' => $username, 
			'sd_user' => md5($passwd)
		);
		$cek = $this->Mod_login->ceklogin("tabah_user",$where)->num_rows();
		if ($cek > 0) {
			$datasession = array(
				'nama' => $username,
				'status' => "login" 
			);
			$this->session->set_userdata($datasession);
			redirect('admin');
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
		redirect('admin');

	}


	public function logout(){
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}
