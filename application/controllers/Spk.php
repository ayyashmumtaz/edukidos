<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "admin"){
      redirect(base_url("Login"));
    }
		$this->load->model('Model_spk');
	}

	public function index()
	{
	
	}

	public function a3()
	{
	$data['orderMasuk'] = $this->Model_spk->getReadya3()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('spk/a3', $data);				
	$this->load->view('dashboard/_partials/footer');
	}

	public function indoor()
	{
	$data['orderMasuk'] = $this->Model_spk->getReadyIndoor()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('spk/indoor', $data);				
	$this->load->view('dashboard/_partials/footer');
	}

	public function outdoor()
	{
	$data['orderMasuk'] = $this->Model_spk->getReadyOutdoor()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('spk/outdoor', $data);				
	$this->load->view('dashboard/_partials/footer');
	}

	public function cutting()
	{
	$data['orderMasuk'] = $this->Model_spk->getReadyCutting()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('spk/cutting', $data);				
	$this->load->view('dashboard/_partials/footer');
	}

	public function finishing()
	{
	$data['orderMasuk'] = $this->Model_spk->getReadyFinishing()->result();;
	$this->load->view('dashboard/_partials/header');
	$this->load->view('dashboard/_partials/sidebar');
	$this->load->view('spk/finishing', $data);				
	$this->load->view('dashboard/_partials/footer');
	}

	function ambil_kerja_a3(){

	$id_order = $this->input->post('id_order');
	$spk = $this->session->userdata('username');

	$data = array(
		'status' => 1,
		'spk' => $spk
		);

	$where = array(
		'id_order' => $id_order
	);

	$this->Model_spk->update_order_produksi($where,$data,'orderan');
	$this->session->set_flashdata('update_berhasil', ' ');
	redirect('Spk/a3');
}

}

/* End of file Spk.php */
/* Location: ./application/controllers/Spk.php */