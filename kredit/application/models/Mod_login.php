<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_login extends CI_Model {

	public function ceklogin($table, $where){
		return $this->db->get_where($table, $where);
	}


	public function jml_penyicil(){
		return $this->db->get_where('tabah_peminjam', array('td_peminjam' => 0 ));
	}

	public function show_profile(){
		return $this->db->get_where('mmber', array("nik" => 1));

	}

	public function jml_barang(){
		return $this->db->get_where('tabah_barang', array('td_barang' => 0));
	}

	public function fetch_barang(){
		return $this->db->get('tabah_barang');
		$this->db->order_by('kd_barang', 'asc');
		return TRUE;
	}

	public function show_updatebarang($id){
		return $this->db->get_where('tabah_barang', array('kd_barang' => $id));
	}

	public function show_updatesupplier($id){
		return $this->db->get_where('supplier', array('kd_supplier' => $id));
	}


	public function add_barang($data){
		$this->db->insert('tabah_barang', $data);
		return TRUE;
	}

	public function add_member($data){
		$this->db->insert('mmber', $data);
		return TRUE;
	}

	public function add_supplier($data){
		$this->db->insert('supplier', $data);
		return TRUE;
	}

	public function updatebarang($id, $data){
		$this->db->where('kd_barang', $id);
    	return $this->db->update('tabah_barang', $data);
	}

	public function updatesupplier($id, $data){
		$this->db->where('kd_supplier', $id);
    	return $this->db->update('supplier', $data);
	}

	public function deletebarang($id){
		$this->db->where('kd_barang', $id);
		$this->db->delete('tabah_barang');
	}

	public function deletesupplier($id){
		$this->db->where('kd_supplier', $id);
		$this->db->delete('supplier');
	}

	public function add_penyicil($data){
		$this->db->insert('tabah_peminjam', $data);
	}

	public function show_penyicil(){
		return $this->db->get_where('tabah_peminjam', array('td_peminjam' => 0));
		$this->db->order_by('kd_peminjam', 'asc');
		return TRUE;
	}

	public function show_supplier(){
		return $this->db->get_where('supplier');
		$this->db->order_by('kd_supplier', 'asc');
		return TRUE;
	}

	public function show_updatepenyicil($id){
		return $this->db->get_where('tabah_peminjam', array('kd_peminjam' => $id));
	}

	public function doupdate_penyicil($id, $data){
		$this->db->where('kd_peminjam', $id);
		$this->db->update('tabah_peminjam', $data);
	}


	public function show_kategori_elektronik(){
		return $this->db->get_where('tabah_barang', array("kategori" => "elektronik"));
	}

	public function show_kategori_sembako(){
		return $this->db->get_where('tabah_barang', array("kategori" => "sembako"));
	}

	public function delete_penyicil($id){
		$this->db->where('kd_peminjam', $id);
		$this->db->delete('tabah_peminjam');
	}


	public function tampil_nyicil_elektronik(){
		$id = $this->uri->segment(3);
		$this->db->select("*");
		$this->db->from('tabah_peminjam');
		$this->db->join('tabah_cicilan','tabah_peminjam.kd_peminjam=tabah_cicilan.kd_peminjam');
		$this->db->where('tabah_cicilan.kd_barang='.$id);	
		return $this->db->get();
	}

}
