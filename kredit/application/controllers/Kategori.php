<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_login');
	}
	
	public function sembako($id)
	{	
		$data['id'] = $this->uri->segment(3);
		$data['penyicil'] = $this->Mod_login->show_penyicil();
		$data['sub'] = "Daftar Peminjam";
		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
  		$data['data_cicil'] = $this->Mod_login->tampil_nyicil_elektronik();
		$data['content'] = 'content/kategori';
		$this->load->view('dashboard',$data);
	}

	public function elektronik($id){
		$data['id'] = $this->uri->segment(3);
		$data['penyicil'] = $this->Mod_login->show_penyicil();
		$data['sub'] = "Daftar Peminjam";
		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
		$data['data_cicil'] = $this->Mod_login->tampil_nyicil_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
		$data['content'] = 'content/kategori';
		$this->load->view('dashboard',$data);
	}
}
