<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "admin"){
      redirect(base_url("Login"));
    }
		$this->load->model('Model_order');
	}

	public function index()
	{
	
	}

	public function input_order()
	{
	$data['customer'] = $this->Model_order->get_customer();
	$this->load->view('dashboard/_partials/header');
    $this->load->view('dashboard/_partials/sidebar');
    $this->load->view('dashboard/input_order', $data);
    $this->load->view('dashboard/_partials/footer');
	}


}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */