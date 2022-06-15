<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();	
		 
		$this->load->model('Login_model');

	}

	function index(){
		if($this->session->userdata('status') == "admin"){
      redirect(base_url("Beranda"));
    }	
		$this->load->view('dashboard/_partials/header');
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Login_model->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'username' => $username,
				'nama' => $nama,
				'status' => "admin"
				);

			$this->session->set_userdata($data_session);


			$this->session->set_flashdata('login_berhasil', ' ');
			redirect(base_url("Beranda"));
			

		}else{
			$this->session->set_flashdata('login_gagal', ' ');
			redirect(base_url("Login"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}



/* End of file Login.php */
/* Location: ./application/controllers/Login.php */