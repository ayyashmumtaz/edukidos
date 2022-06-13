<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_produksi');
	}

	public function index()
	{
		
	}

	public function a3()
	{
	$data['orderMasuk'] = $this->Model_produksi->getCetakA3()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('produksi/a3', $data);				
	$this->load->view('dashboard/_partials/footer');
	}

	public function indoor()
	{
	$data['orderMasuk'] = $this->Model_produksi->getCetakIndoor()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('produksi/indoor', $data);				
	$this->load->view('dashboard/_partials/footer');
	}

	public function outdoor()
	{
	$data['orderMasuk'] = $this->Model_produksi->getCetakOutdoor()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('produksi/outdoor', $data);				
	$this->load->view('dashboard/_partials/footer');
	}

	public function cutting()
	{
	$data['orderMasuk'] = $this->Model_produksi->getCetakCutting()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('produksi/cutting', $data);				
	$this->load->view('dashboard/_partials/footer');
	}

	public function finishing()
	{
	$data['orderMasuk'] = $this->Model_produksi->getCetakFinishing()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('produksi/finishing', $data);				
	$this->load->view('dashboard/_partials/footer');
	}


}

/* End of file Produksi.php */
/* Location: ./application/controllers/Produksi.php */