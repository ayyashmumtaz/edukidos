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

    $this->load->model('Model_order');
  }

  public function index()
  {
    $data['total_order'] = $this->Model_order->jumlahOrder();
    $data['total_orderUnfinish'] = $this->Model_order->jumlahOrderUnfinish();
    $this->load->view('dashboard/_partials/header');
    $this->load->view('dashboard/_partials/sidebar');
    $this->load->view('dashboard/index', $data);
    $this->load->view('dashboard/_partials/footer');
  }

}


/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */