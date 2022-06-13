<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {

	public function index()
	{
		
	}

	public function barang_masuk()
	{
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('gudang/masuk');				
	$this->load->view('dashboard/_partials/footer');
	}

	public function barang_keluar()
	{
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('gudang/keluar');				
	$this->load->view('dashboard/_partials/footer');
	}

	public function barang_datang()
	{
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('gudang/datang');				
	$this->load->view('dashboard/_partials/footer');
	}

	public function barang_retur()
	{
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('gudang/retur');				
	$this->load->view('dashboard/_partials/footer');
	}

	

	

}

/* End of file Gudang.php */
/* Location: ./application/controllers/Gudang.php */