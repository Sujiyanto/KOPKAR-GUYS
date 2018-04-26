<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_login');

	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/login"));
		}

		$data['supplier'] = $this->Mod_login->show_supplier();
		$data['customer'] = $this->Mod_login->jml_penyicil()->num_rows();
		$data['barang'] = $this->Mod_login->fetch_barang();
		$data['sub'] = "Data Supplier";
		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
		$data['content'] = 'content/supplier';
		$this->load->view('dashboard', $data);
	}


	public function add_supplier(){
	
		if (!empty($_POST)) {
			$data = array(
				'kd_supplier' => '',
				'nm_supplier' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'telp' => $this->input->post('telepon')
	
			);
			$this->Mod_login->add_supplier($data);
			
		}
	}

	public function updatesupplier(){
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/login"));
		}
		$id = $this->uri->segment(3);
		$data['sub'] = "Update supplier";
		$data['supplier'] = $this->Mod_login->show_updatesupplier($id);
		$data['nav'] = $this->Mod_login->show_kategori_elektronik();
  		$data['nav_sembako'] = $this->Mod_login->show_kategori_sembako();
		$data['content'] = 'content/updatesupplier';
		$this->load->view('dashboard', $data);
	}

	public function do_update(){

		$id = $this->input->post('kd_supplier');
	
		$data = array(
				'kd_supplier' => $id,
				'nm_supplier' => $this->input->post('nm_supplier'),
				'alamat' => $this->input->post('alamat'),
				'telp' => $this->input->post('telp')
			);
				
			// var_dump($data);
		$this->Mod_login->updatesupplier($id, $data);
			redirect('supplier');	
}



	public function deletesupplier(){
		$id = $this->uri->segment(3);
		$this->Mod_login->deletesupplier($id);
		redirect('supplier');
	}
}
