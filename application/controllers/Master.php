<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $status = $this->session->userdata('role');
    if(!isset($status)){
      redirect(base_url("Login"));
    }
		$this->load->model('Model_master');
		$this->load->model('Model_order');
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
	$data['konsumen'] = $this->Model_master->getKonsumen()->result();;
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
	$data['kategori'] = $this->Model_master->getKategori()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('master/kategori', $data);				
	$this->load->view('dashboard/_partials/footer');	}



	public function edit_bahan($id_bahan){
	
	$data['kategori'] = $this->Model_order->get_kategori();

	$where = array('id_bahan'=> $id_bahan);
	$data['bahan'] = $this->Model_master->edit_data_bahan($where,'bahan')->result();
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('master/edit/edit_bahan', $data);				
	$this->load->view('dashboard/_partials/footer');	}

	function update_bahan(){

	$id_bahan = $this->input->post('id_bahan');
	$id_kategori = $this->input->post('kategori');
	$nama_bahan = $this->input->post('nama_bahan');
	$harga_beli = $this->input->post('harga_beli');
	$harga_jual = $this->input->post('harga_jual');

	$data = array(
		'harga_beli' => $harga_beli,
		'nama_bahan' => $nama_bahan,
		'harga_jual' => $harga_jual,
		'id_kategori' => $id_kategori
		);

	$where = array(
		'id_bahan' => $id_bahan
	);

	$this->Model_master->update_data($where,$data,'bahan');
	$this->session->set_flashdata('update_berhasil', ' ');
	redirect('Master/data_bahan');
}
	
		


}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */