<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_master extends CI_Model
{

	public function getDataBahan()
	{
		$this->db->select('*');
		$this->db->from('bahan');
		// $this->db->join('stok', 'bahan.id_bahan = stok.id_barang');
		$this->db->join('kategori', 'kategori.id_kategori = bahan.id_kategori');
		$this->db->join('satuan', 'satuan.id = bahan.id_satuan');
		$query = $this->db->get();
		return $query;
	}

	public function getDataProduk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori');
		$this->db->join('satuan', 'satuan.id = produk.id_satuan');
		$query = $this->db->get();
		return $query;
	}

	public function getkategori()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$query = $this->db->get();
		return $query;
	}

	public function getRekening()
	{
		$this->db->select('*');
		$this->db->from('rekening');
		$query = $this->db->get();
		return $query;
	}

	public function getKaryawan()
	{
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query;
	}

	public function getPaket()
	{
		$this->db->select('*');
		$this->db->from('paket');
		$query = $this->db->get();
		return $query;
	}

	public function getSatuan()
	{
		$this->db->select('*');
		$this->db->from('satuan');
		$query = $this->db->get();
		return $query;
	}

	public function getKonsumen()
	{
		$this->db->select('*');
		$this->db->from('customer');
		$query = $this->db->get();
		return $query;
	}



	function edit_data_bahan($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function edit_data_rekening($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function edit_data_satuan($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function edit_data_produk($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function edit_data_kategori($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function edit_data_konsumen($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function edit_data_karyawan($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}

/* End of file Model_master.php */
/* Location: ./application/models/Model_master.php */
