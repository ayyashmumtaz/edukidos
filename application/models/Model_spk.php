<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_spk extends CI_Model {

public function getReadya3()
	{
	$kategori = array('kategori' => 'a3','status' => 0);
	$this->db->where($kategori);
	return $this->db->get('orderan');
}

public function getReadyIndoor()
	{
	$kategori = array('kategori' => 'indoor','status' => 0);
	$this->db->where($kategori);
	return $this->db->get('orderan');
}

public function getReadyOutdoor()
	{
	$kategori = array('kategori' => 'outdoor','status' => 0);
	$this->db->where($kategori);
	return $this->db->get('orderan');
}

public function getReadyCutting()
	{
	$kategori = array('kategori' => 'cutting','status' => 0);
	$this->db->where($kategori);
	return $this->db->get('orderan');
}

public function getReadyFinishing()
	{
	$kategori = array('kategori' => 'finishing','status' => 0);
	$this->db->where($kategori);
	return $this->db->get('orderan');
}
}

/* End of file Model_spk.php */
/* Location: ./application/models/Model_spk.php */