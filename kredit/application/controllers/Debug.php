<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debug extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_login');
	}

	
	public function index()
	{
		$this->db->select("*");
		$this->db->from('tabah_peminjam');
		$this->db->join('tabah_cicilan','tabah_peminjam.kd_peminjam=tabah_cicilan.kd_peminjam');
		$this->db->where('tabah_cicilan.kd_barang=10001');
		print("<pre>");
		print_r($this->db->get()->result_array());
	}
}
