<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gudang extends CI_Model {

	public function input_data($data, $table){
      $this->db->insert($table, $data);
   }

   public function getHistoryStok(){
   	$this->db->select('*');
   	$this->db->from('pembelian');
   	$this->db->join('bahan', 'pembelian.id_barang = bahan.id_bahan');
      $this->db->join('kategori', 'bahan.id_kategori = kategori.id');
   	$query = $this->db->get();
   	return $query->result();
   }

   public function getBarangRetur()
   {
      $this->db->select('*');
   	$this->db->from('pembelian');
   	$this->db->join('bahan', 'pembelian.id_barang = bahan.id_bahan');
   	$this->db->join('kategori', 'bahan.id_kategori = kategori.id');
   	$query = $this->db->get();
   	return $query->result();      
   }

}

/* End of file Model_gudang.php */
/* Location: ./application/models/Model_gudang.php */