<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

public function __construct()
{
    parent::__construct();
    $this->load->model('Model_rekap');
}

public function sj_digimaxie($id_request){
    $data['rekapDetail'] = $this->Model_rekap->getBarangKeluar($id_request);
    $this->load->view('dashboard/_partials/header');
    $this->load->view('rekap/surat_jalan_digimaxie', $data);
}

public function sj_edukidos($id_request){
    $data['rekapDetail'] = $this->Model_rekap->getBarangKeluar($id_request);
    $this->load->view('dashboard/_partials/header');
    $this->load->view('rekap/surat_jalan_edukidos', $data);
}

}
