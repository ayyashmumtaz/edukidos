<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 if($this->session->userdata('status') != "admin"){
      redirect(base_url("Login"));
    }
		$this->load->model('Model_produksi');
		$this->load->model('Model_spk');
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

	function selesai_kerja(){

	$id_order = $this->input->post('id_order');

	$data = array(
		'status' => 2,
		);

	$where = array(
		'id_order' => $id_order
	);

	$this->Model_spk->update_order_produksi($where,$data,'orderan');
	$this->session->set_flashdata('kerja_selesai', ' ');
	redirect('Beranda');
}


}

/* End of file Produksi.php */
/* Location: ./application/controllers/Produksi.php */