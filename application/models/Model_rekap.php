<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rekap extends CI_Model {

   public function getLaporanCetak()
   {
      $this->db->select('*');
      $status = array('status' => '4');
      $this->db->where($status);
      $this->db->from('orderan');
      $this->db->join('surat_jalan', 'orderan.id_order = surat_jalan.id_order');
      $this->db->join('bahan', 'orderan.id_barang = bahan.id_bahan');
      $this->db->join('customer', 'customer.id = orderan.nama');
      $this->db->join('kategori', 'orderan.kategori = kategori.id',);
      $query = $this->db->get();
      return $query->result();
   }

   public function getDetailLaporan($id_order)
   {
      $this->db->select('*');
      $this->db->from('orderan');
      $this->db->join('surat_jalan', 'orderan.id_order = surat_jalan.id_order');
      $this->db->join('bahan', 'orderan.id_barang = bahan.id_bahan');
      $this->db->join('customer', 'customer.id = orderan.nama');
      $this->db->join('kategori', 'orderan.kategori = kategori.id',);
      $this->db->where('orderan.id_order', $id_order);
      $query = $this->db->get();
      return $query->row();
   }
}

/* End of file Model_rekap.php */
/* Location: ./application/models/Model_rekap.php */