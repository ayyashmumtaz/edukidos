<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_produksi extends CI_Model {

	public function getCetakA3()
	{
	$kategori = array('kategori' => 'a3','status' => 1);
	$this->db->where($kategori);
	return $this->db->get('orderan');
}

public function getCetakIndoor()
	{
	$kategori = array('kategori' => 'indoor','status' => 1);
	$this->db->where($kategori);
	return $this->db->get('orderan');
}

public function getCetakOutdoor()
	{
	$kategori = array('kategori' => 'outdoor','status' => 1);
	$this->db->where($kategori);
	return $this->db->get('orderan');
}

public function getCetakCutting()
	{
	$kategori = array('kategori' => 'cutting','status' => 1);
	$this->db->where($kategori);
	return $this->db->get('orderan');
}

public function getCetakFinishing()
	{
	$kategori = array('kategori' => 'finishing','status' => 1);
	$this->db->where($kategori);
	return $this->db->get('orderan');
}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */