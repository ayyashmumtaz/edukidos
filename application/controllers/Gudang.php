<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $status = $this->session->userdata('role');
    if(!isset($status)){
      redirect(base_url("Login"));
    }
		$this->load->model('Model_gudang');
		$this->load->model('Model_order');
	}

	public function index()
	{
			$data['bahanBaku'] = $this->Model_order->get_bahanBaku();

	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('gudang/input', $data);				
	$this->load->view('dashboard/_partials/footer');

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

	public function tambah_stok()
	{
		$data['bahanBaku'] = $this->Model_order->get_bahanBaku();

		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('gudang/stok/tambah', $data);				
		$this->load->view('dashboard/_partials/footer');
	}

	public function insert_pembelian()
	{
		$id_beli= uniqid();
		$id_barang = $this->input->post('id_barang');
		$jumlah = $this->input->post('jumlah');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'id_beli' => $id_beli,
			'id_barang' => $id_barang,
			'jumlah' => $jumlah,
			'tgl_beli' => $tanggal,
			);
		
		$data2 = array(
			'id_barang' => $id_barang,
			'stok' => $jumlah,
		);

		$this->db->where('id_barang', $id_barang);
		$b = $this->db->get('pembelian');

		if ($b->num_rows() > 0) {
			$this->db->where('id_barang', $id_barang);
			$this->Model_gudang->input_data($data, 'pembelian');
			$this->session->set_flashdata('pembelian_sukses', ' ');
			redirect('Beranda/stok');
		} else {;
			$this->Model_gudang->input_data($data, 'pembelian');
			$this->Model_gudang->input_data($data2, 'stok');
			$this->session->set_flashdata('pembelian_sukses', ' ');
			redirect('Beranda/stok');
		}

		
	}

	

}

/* End of file Gudang.php */
/* Location: ./application/controllers/Gudang.php */