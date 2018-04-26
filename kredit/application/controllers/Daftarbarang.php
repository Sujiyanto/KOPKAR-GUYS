<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarbarang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_login');

	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/login"));
		}

		$data['customer'] = $this->Mod_login->jml_penyicil()->num_rows();
		$data['barang'] = $this->Mod_login->fetch_barang();
		$data['sub'] = "Daftar barang";
		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
		$data['content'] = 'content/daftarbarang';
		$this->load->view('dashboard', $data);
	}


	public function add_barang(){
		$xWaktu = gmdate("d-m-20y H:i:s",time()+60*60*7);
		$xDate = substr ($xWaktu, 0, 10);
		$tgl = explode("-",$xDate);
		$xDate = $tgl[2].'-'.$tgl[1].'-'.$tgl[0];

		$xClock = Strstr($xWaktu," ");
		$xClock = substr ($xClock, 1);
		if (!empty($_POST)) {
			$data = array(
				'kd_barang' => '',
				'nm_barang' => $this->input->post('add_barang'),
				'kategori' => $this->input->post('add_kategori'),
				'kd_kategori' => '',
				'ket_barang' => $this->input->post('add_keterangan'),
				'tgl_simpan' => $xDate,
				'jam_simpan' => $xClock
			);
			$this->Mod_login->add_barang($data);
			
		}
	}

	public function updatebarang(){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/login"));
		}
		$id = $this->uri->segment(3);
		$data['sub'] = "Update barang";
		$data['barang'] = $this->Mod_login->show_updatebarang($id);
		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
		$data['content'] = 'content/updatebarang';
		$this->load->view('dashboard', $data);
	}

	public function do_update(){
		$xWaktu = gmdate("d-m-20y H:i:s",time()+60*60*7);
		$xDate = substr ($xWaktu, 0, 10);
		$tgl = explode("-",$xDate);
		$xDate = $tgl[2].'-'.$tgl[1].'-'.$tgl[0];
		$id = $this->input->post('kd_barang');
		$xClock = Strstr($xWaktu," ");
		$xClock = substr ($xClock, 1);
		
	
		$data = array(
				'kd_barang' => $this->input->post('kd_barang'),
				'nm_barang' => $this->input->post('nm_barang'),
				'kategori' => $this->input->post('kategori'),
				'kd_kategori' => '',
				'ket_barang' => $this->input->post('keterangan'),
				'tgl_simpan' => $xDate,
				'jam_simpan' => $xClock,
				'td_barang' => 0
			);
			// var_dump($data);
		$this->Mod_login->updatebarang($id, $data);
			redirect('daftarbarang');	
}



	public function deletebarang(){
		$id = $this->uri->segment(3);
		$this->Mod_login->deletebarang($id);
		redirect('daftarbarang');
	}
}
