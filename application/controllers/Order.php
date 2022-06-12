<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
	
	}

	public function input_order()
	{
	$this->load->view('dashboard/_partials/header');
    $this->load->view('dashboard/_partials/sidebar');
    $this->load->view('dashboard/input_order');
    $this->load->view('dashboard/_partials/footer');
	}

	function get_kategori()
	{
    	$query = $this->db->query('SELECT * FROM layanan');
    	return $this->db->query($query)->result();
	}

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */