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
    $status = $this->session->userdata('role');
    if(!isset($status)){
      redirect(base_url("Login"));
    }

    $this->load->model('Login_model');
    $this->load->model('Model_order');
  }

  public function index()
  {
    $status = $this->session->userdata('role');
    if($status != 1){
    redirect(base_url("Login"));
    }
      $data['total_order'] = $this->Model_order->jumlahOrder();
    $data['total_bulanan'] = $this->Model_order->getSumBulanan();
    $data['total_harian'] = $this->Model_order->getSumToday();
    $data['total_orderUnfinish'] = $this->Model_order->jumlahOrderUnfinish();
    $data['total_orderFinish'] = $this->Model_order->jumlahOrderFinish();
    $data['total_orderComplain'] = $this->Model_order->jumlahOrderComplain();
    $data['total_orderUrgent'] = $this->Model_order->jumlahOrderUrgent();
    $data['total_orderA3'] = $this->Model_order->jumlahOrderA3();
    $data['total_orderIndoor'] = $this->Model_order->jumlahOrderIndoor();
    $data['total_orderOutdoor'] = $this->Model_order->jumlahOrderOutdoor();

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

  public function stok()
  {
    $data['allPembayaran'] = $this->Model_order->getAllStok()->result();
    $this->load->view('dashboard/_partials/header');
    $this->load->view('dashboard/_partials/sidebar');
    $this->load->view('dashboard/stok', $data);
    $this->load->view('dashboard/_partials/footer');
  }

}


/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */