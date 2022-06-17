<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_master extends CI_Model {

	public function getDataBahan()
	{
	$this->db->select('*');
    $this->db->from('bahan'); 
     $this->db->join('kategori','bahan.id_kategori = kategori.id','LEFT');      
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
	

}

/* End of file Model_master.php */
/* Location: ./application/models/Model_master.php */