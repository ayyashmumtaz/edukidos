<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gudang extends CI_Model {

	public function input_data($data, $table){
      $this->db->insert($table, $data);
   }

   public function update_data($where, $data, $table){
      $this->db->where($where);
      $this->db->update($table, $data);
   }

   public function getHistoryStok(){
   	$this->db->select('*');
   	$this->db->from('pembelian');
   	$this->db->join('bahan', 'pembelian.id_barang = bahan.id_bahan');
   	$query = $this->db->get();
   	return $query->result();
   }

   public function getHistoryRevisi(){
   	$this->db->select('*');
   	$this->db->from('revisi_stok');
   	$this->db->join('bahan', 'revisi_stok.id_barang = bahan.id_bahan');
   	$query = $this->db->get();
   	return $query->result();
   }

   public function getReqBarangMasuk()
   {
      $this->db->select('*');
      $this->db->from('req_barangmasuk');
      $query = $this->db->get();
      return $query->result();
   }

   public function getReqBarangKeluar()
   {
      $this->db->select('*');
      $this->db->from('req_barangkeluar');
   	$this->db->join('user', 'user.id_user = req_barangkeluar.id_user');
   	$this->db->join('produk', 'produk.id_produk = req_barangkeluar.id_produk');
      $this->db->order_by('req_barangkeluar.status_barang','DESC');
      $query = $this->db->get();
      return $query->result();
   }

   public function getReqBarangKeluar_diterima()
   {
      $this->db->select('*');
      $this->db->from('req_barangkeluar');
   	$this->db->join('user', 'user.id_user = req_barangkeluar.id_user');
   	$this->db->join('produk', 'produk.id_produk = req_barangkeluar.id_produk');
      $this->db->where('req_barangkeluar.status_barang', 'diterima');
      $query = $this->db->get();
      return $query->result();
   }

   public function getBarangRetur()
   {
      $this->db->select('*');
   	$this->db->from('pembelian');
   	$this->db->join('bahan', 'pembelian.id_barang = bahan.id_bahan');
   	$this->db->join('stok_retur', 'pembelian.id_beli = stok_retur.id_beli');
   	$query = $this->db->get();
      return $query->result();  
   }

   public function getStokRetur()
   {
      $this->db->select('*');
      $this->db->from('stok_retur');
      $this->db->join('pembelian', 'stok_retur.id_beli = pembelian.id_beli');
      $this->db->join('bahan', 'stok_retur.id_barang = bahan.id_bahan');
      $query = $this->db->get();
      return $query->result();
   }

   public function getBarangKeluar()
   {
      $this->db->select('*');
      $this->db->from('orderan');
      $this->db->join('bahan', 'orderan.id_barang = bahan.id_bahan');
      $query = $this->db->get();
      return $query->result();
   }

   public function BarangRetur($id_beli)
   {
      $this->db->select('*');
      $this->db->from('pembelian');
      $this->db->join('bahan', 'pembelian.id_barang = bahan.id_bahan');
      $this->db->where('pembelian.id_beli', $id_beli);
      $query = $this->db->get();
      return $query->row();
   }

   public function detailStokRetur($id)
   {
      $this->db->select('*');
      $this->db->from('stok_retur');
      $this->db->join('pembelian', 'stok_retur.id_beli = pembelian.id_beli');
      $this->db->join('bahan', 'stok_retur.id_barang = bahan.id_bahan');
      $this->db->where('stok_retur.id_retur', $id);
      $query = $this->db->get();
      return $query->row();
   }

   public function cek_stok($id)
   {
      $query = $this->db->get_where('stok', array('id_barang' => $id));
      return $query->result();
   }

	public function edit_data_req_barangkeluar($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
}

/* End of file Model_gudang.php */
/* Location: ./application/models/Model_gudang.php */
