<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_master');
	}

	public function index()
	{
		
	}

	public function data_bahan()
	{
	$data['dataBahan'] = $this->Model_master->getDataBahan()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('master/data_bahan', $data);				
	$this->load->view('dashboard/_partials/footer');
	}

	public function rekening()
	{
	$data['rekening'] = $this->Model_master->getRekening()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('master/rekening', $data);				
	$this->load->view('dashboard/_partials/footer');	}

	public function konsumen()
	{
	$data['orderMasuk'] = $this->Model_master->getKonsumen()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('master/konsumen', $data);				
	$this->load->view('dashboard/_partials/footer');	}

	public function karyawan()
	{
	$data['karyawan'] = $this->Model_master->getKaryawan()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('master/karyawan', $data);				
	$this->load->view('dashboard/_partials/footer');	}

	public function kategori()
	{
	$data['orderMasuk'] = $this->Model_master->getKategori()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('master/kategori', $data);				
	$this->load->view('dashboard/_partials/footer');	}



}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */