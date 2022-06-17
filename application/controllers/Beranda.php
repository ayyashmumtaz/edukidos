<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Beranda
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Beranda extends CI_Controller
{
    
  function __construct(){
    parent::__construct();
  
    if($this->session->userdata('status') != "admin"){
      redirect(base_url("Login"));
    }
    $this->load->model('Login_model');
    $this->load->model('Model_order');
  }

  public function index()
  {
    $data['total_order'] = $this->Model_order->jumlahOrder();
    $data['total_bulanan'] = $this->Model_order->getSumBulanan();
    $data['total_orderUnfinish'] = $this->Model_order->jumlahOrderUnfinish();
    $data['total_orderUrgent'] = $this->Model_order->jumlahOrderUrgent();

    $this->load->view('dashboard/_partials/header');
    $this->load->view('dashboard/_partials/sidebar');
    $this->load->view('dashboard/index', $data);
    $this->load->view('dashboard/_partials/footer');
  }

  public function berita_acara()
  {
    $this->load->view('dashboard/_partials/header');
    $this->load->view('dashboard/_partials/sidebar');
    $this->load->view('dashboard/berita_acara');
    $this->load->view('dashboard/_partials/footer');
  }

  public function surat_jalan()
  {
    $data['orderMasuk'] = $this->Model_order->finishedJob()->result();;
    $this->load->view('dashboard/_partials/header');
    $this->load->view('dashboard/_partials/sidebar');
    $this->load->view('dashboard/surat_jalan', $data);
    $this->load->view('dashboard/_partials/footer');
  }

  public function pembayaran()
  {
    $data['allPembayaran'] = $this->Model_order->getAllBayar()->result();
    $this->load->view('dashboard/_partials/header');
    $this->load->view('dashboard/_partials/sidebar');
    $this->load->view('dashboard/pembayaran', $data);
    $this->load->view('dashboard/_partials/footer');
  }

}


/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */