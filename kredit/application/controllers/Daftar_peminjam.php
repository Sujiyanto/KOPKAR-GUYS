<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_peminjam extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_login');
	}


	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/login"));
		}

		$data['penyicil'] = $this->Mod_login->show_penyicil();
		$data['sub'] = "Daftar Peminjam";
		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
		$data['content'] = 'content/daftarpeminjam';
		$this->load->view('dashboard', $data);
	}

	public function delete_penyicil(){
		$id = $this->uri->segment(3);
		$this->Mod_login->delete_penyicil($id);
		redirect('daftar_peminjam');
	}

	//ADD data Kreditur
	public function add_peminjam(){
		$xWaktu = gmdate("d-m-20y H:i:s",time()+60*60*7);
		$xDate = substr ($xWaktu, 0, 10);
		$tgl = explode("-",$xDate);
		$xDate = $tgl[2].'-'.$tgl[1].'-'.$tgl[0];

		$xClock = Strstr($xWaktu," ");
		$xClock = substr ($xClock, 1);

		if (!empty($_POST)) {
			$data = array(
				'kd_peminjam' => '',
				'nm_peminjam' => $this->input->post('nama'),
				'idc_peminjam' => $this->input->post('ktpsim'),
				'amt_peminjam' => $this->input->post('alamat'),
				'tlp_peminjam' => $this->input->post('telepon'),
				'tgl_simpan' => $xDate,
				'jam_simpan' => $xClock
			);
			$this->Mod_login->add_penyicil($data);

		}
	}



	//show update peminjam
	public function update_peminjam(){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/login"));
		}
		$id = $this->uri->segment(3);
		$data['sub'] = "Update barang";
		$data['peminjam'] = $this->Mod_login->show_updatepenyicil($id);
		$data['content'] = 'content/update_peminjam';
		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
		$this->load->view('dashboard', $data);
	}


	public function doupdate_peminjam(){
		$xWaktu = gmdate("d-m-20y H:i:s",time()+60*60*7);
		$xDate = substr ($xWaktu, 0, 10);
		$tgl = explode("-",$xDate);
		$xDate = $tgl[2].'-'.$tgl[1].'-'.$tgl[0];
		$xClock = Strstr($xWaktu," ");
		$xClock = substr ($xClock, 1);
		$id = $this->input->post('kd_peminjam');


		$data = array(
			'kd_peminjam' => $id,
			'nm_peminjam' => $this->input->post('nm_peminjam'),
			'idc_peminjam' => $this->input->post('idc_peminjam'),
			'amt_peminjam' => $this->input->post('amt_peminjam'),
			'tlp_peminjam' => $this->input->post('tlp_peminjam'),
			'tgl_simpan' => $xDate,
			'jam_simpan' => $xClock,
			'td_peminjam' => $this->input->post('td_peminjam')
		);
		$this->Mod_login->doupdate_penyicil($id, $data);
			redirect('daftar_peminjam');
	}

}
