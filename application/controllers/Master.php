<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$status = $this->session->userdata('role');
		if (!isset($status)) {
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
		$data['dataBahan'] = $this->Model_master->getDataBahan()->result();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/data_bahan', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function data_produk()
	{
		$data['dataBahan'] = $this->Model_master->getDataProduk()->result();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/data_produk', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function data_kategori()
	{
		$data['dataBahan'] = $this->Model_master->getkategori()->result();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/data_kategori', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function data_satuan()
	{
		$data['dataSatuan'] = $this->Model_master->getSatuan()->result();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/data_satuan', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function data_paket()
	{
		$data['dataPaket'] = $this->Model_master->getPaket()->result();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/data_paket', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function edit_satuan($id)
	{
		$where = array('id' => $id);
		$data['satuan'] = $this->Model_master->edit_data_satuan($where, 'satuan')->result();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/edit/edit_satuan', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	function update_satuan()
	{
		$id = $this->input->post('id');
		$satuan = $this->input->post('satuan');

		$data = array(
			'satuan' => $satuan,
		);

		$where = array(
			'id' => $id
		);

		$this->Model_master->update_data($where, $data, 'satuan');
		$this->session->set_flashdata('update_berhasil', ' ');
		redirect('Master/data_satuan');
	}

	public function edit_produk($id_produk)
	{
		$where = array('id_produk' => $id_produk);
		$data['kategori'] = $this->Model_order->get_kategori();
		$data['satuan'] = $this->Model_order->getSatuan();
		$data['produk'] = $this->Model_master->edit_data_produk($where, 'produk')->result();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/edit/edit_produk', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	function update_produk()
	{
		$id_produk = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$id_satuan = $this->input->post('id_satuan');
		$id_kategori = $this->input->post('id_kategori');

		$data = array(
			'nama_produk' => $nama_produk,
			'id_satuan' => $id_satuan,
			'id_kategori' => $id_kategori,
		);

		$where = array(
			'id_produk' => $id_produk
		);

		$this->Model_master->update_data($where, $data, 'produk');
		$this->session->set_flashdata('update_berhasil', ' ');
		redirect('Master/data_produk');
	}

	public function rekening()
	{
		$data['rekening'] = $this->Model_master->getRekening()->result();;
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/rekening', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function konsumen()
	{
		$data['konsumen'] = $this->Model_master->getKonsumen()->result();;
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/konsumen', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function karyawan()
	{
		$data['karyawan'] = $this->Model_master->getKaryawan()->result();;
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/karyawan', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function edit_bahan($id_bahan)
	{
		$where = array('id_bahan' => $id_bahan);
		$data['bahan'] = $this->Model_master->edit_data_bahan($where, 'bahan')->result();
		$data['kategori'] = $this->Model_order->get_kategori();
		$data['satuan'] = $this->Model_order->getSatuan();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/edit/edit_bahan', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	function update_bahan()
	{
		$id_bahan = $this->input->post('id_bahan');
		$nama_bahan = $this->input->post('nama_bahan');
		$kategori = $this->input->post('kategori');
		$satuan = $this->input->post('satuan');
		$data = array(
			'nama_bahan' => $nama_bahan,
			'id_kategori' => $kategori,
			'id_satuan' => $satuan,
		);

		$where = array(
			'id_bahan' => $id_bahan
		);

		$this->Model_master->update_data($where, $data, 'bahan');
		$this->session->set_flashdata('update_berhasil', ' ');
		redirect('Master/data_bahan');
	}


	public function tambah_bahan()
	{
		$data['satuan'] = $this->Model_order->getSatuan();
		$data['kategori'] = $this->Model_order->get_kategori();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/create/tambah_bahan', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function tambah_paket()
	{
		$data['satuan'] = $this->Model_order->getSatuan();
		$data['kategori'] = $this->Model_order->get_kategori();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/create/tambah_paket', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function tambah_produk()
	{
		$data['satuan'] = $this->Model_order->getSatuan();
		$data['kategori'] = $this->Model_order->get_kategori();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/create/tambah_produk', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function tambah_kategori()
	{
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/create/tambah_kategori');
		$this->load->view('dashboard/_partials/footer');
	}

	public function tambah_satuan()
	{
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/create/tambah_satuan');
		$this->load->view('dashboard/_partials/footer');
	}

	public function satuan_save()
	{
		$satuan = $this->input->post('satuan');

		$data = array(
			'id' => uniqid(),
			'satuan' => $satuan,
		);

		$this->Model_master->insert_data($data, 'satuan');
		$this->session->set_flashdata('input-berhasil', ' ');
		redirect('Master/data_satuan');
	}

	public function kategori_save()
	{
		$kategori = $this->input->post('kategori');

		$data = array(
			'id_kategori' => uniqid(),
			'nama_kategori' => $kategori,
		);

		$this->Model_master->insert_data($data, 'kategori');
		$this->session->set_flashdata('input-berhasil', ' ');
		redirect('Master/data_kategori');
	}

	public function hapus_satuan($id)
	{
		$where = array('id' => $id);
		$this->Model_master->hapus_data($where, 'satuan');
		$this->session->set_flashdata('hapus-berhasil', ' ');
		redirect('Master/data_satuan');
	}

	public function bahan_save()
	{
		$id = uniqid();
		$nama_bahan = $this->input->post('nama_bahan');
		$satuan = $this->input->post('satuan');
		$kategori = $this->input->post('kategori');
		$data = array(
			'id_bahan' => $id,
			'nama_bahan' => $nama_bahan,
			'id_kategori' => $kategori,
			'id_satuan' => $satuan,
		);

		$data2 = array(
			'id_barang' => $id,
			'stok' => 0
		);

		$this->Model_master->insert_data($data, 'bahan');
		$this->Model_master->insert_data($data2, 'stok');
		$this->session->set_flashdata('input-berhasil', ' ');
		redirect('Master/data_bahan');
	}

	public function produk_save()
	{
		$id = uniqid();
		$nama_produk = $this->input->post('nama_produk');
		$satuan = $this->input->post('satuan');
		$kategori = $this->input->post('kategori');
		$data = array(
			'id_produk' => $id,
			'nama_produk' => $nama_produk,
			'id_kategori' => $kategori,
			'id_satuan' => $satuan,
		);

		$data2 = array(
			'id_barang' => $id,
			'stok' => 0
		);

		$this->Model_master->insert_data($data, 'produk');
		$this->Model_master->insert_data($data2, 'stok');
		$this->session->set_flashdata('input-berhasil', ' ');
		redirect('Master/data_produk');
	}

	public function hapus_bahan($id_bahan)
	{
		$where = array('id_bahan' => $id_bahan);
		$this->Model_master->hapus_data($where, 'bahan');
		$this->session->set_flashdata('hapus-berhasil', ' ');
		redirect('Master/data_bahan');
	}

	public function hapus_produk($id_produk)
	{
		$where = array('id_produk' => $id_produk);
		$this->Model_master->hapus_data($where, 'produk');
		$this->session->set_flashdata('hapus-berhasil', ' ');
		redirect('Master/data_produk');
	}

	public function tambah_rekening()
	{
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/create/tambah_rekening');
		$this->load->view('dashboard/_partials/footer');
	}

	public function rekening_save()
	{
		$id = uniqid();
		$atas_nama = $this->input->post('atas_nama');
		$norek = $this->input->post('norek');
		$bank = $this->input->post('bank');

		$data = array(
			'id' => $id,
			'atas_nama' => $atas_nama,
			'norek' => $norek,
			'bank' => $bank
		);

		$this->Model_master->insert_data($data, 'rekening');
		$this->session->set_flashdata('input-berhasil', ' ');
		redirect('Master/rekening');
	}

	public function edit_rekening($id_rekening)
	{

		$data['rekening'] = $this->Model_master->getRekening();
		$where = array('id' => $id_rekening);
		$data['rekening'] = $this->Model_master->edit_data_rekening($where, 'rekening')->result();

		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/edit/edit_rekening', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function update_rekening()
	{
		$id = $this->input->post('id');
		$atas_nama = $this->input->post('atas_nama');
		$norek = $this->input->post('norek');
		$bank = $this->input->post('bank');

		$data = array(
			'atas_nama' => $atas_nama,
			'norek' => $norek,
			'bank' => $bank
		);

		$where = array(
			'id' => $id
		);

		$this->Model_master->update_data($where, $data, 'rekening');
		$this->session->set_flashdata('update_berhasil', ' ');
		redirect('Master/rekening');
	}

	public function hapus_rekening($id_rekening)
	{
		$where = array('id' => $id_rekening);
		$this->Model_master->hapus_data($where, 'rekening');
		$this->session->set_flashdata('hapus-berhasil', ' ');
		redirect('Master/rekening');
	}

	public function tambah_konsumen()
	{
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/create/tambah_konsumen');
		$this->load->view('dashboard/_partials/footer');
	}

	public function konsumen_save()
	{
		$id = uniqid();
		$nama_customer = $this->input->post('nama_customer');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');

		$data = array(
			'id' => $id,
			'nama_customer' => $nama_customer,
			'alamat' => $alamat,
			'email' => $email,
			'no_hp' => $no_hp
		);

		$this->Model_master->insert_data($data, 'customer');
		$this->session->set_flashdata('input-berhasil', ' ');
		redirect('Master/konsumen');
	}

	public function edit_konsumen($id_customer)
	{

		$data['customer'] = $this->Model_master->getKonsumen();
		$where = array('id' => $id_customer);
		$data['customer'] = $this->Model_master->edit_data_konsumen($where, 'customer')->result();

		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/edit/edit_konsumen', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function update_konsumen()
	{
		$id = $this->input->post('id');
		$nama_customer = $this->input->post('nama_customer');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');

		$data = array(
			'nama_customer' => $nama_customer,
			'alamat' => $alamat,
			'email' => $email
		);

		$where = array(
			'id' => $id
		);

		$this->Model_master->update_data($where, $data, 'customer');
		$this->session->set_flashdata('update-berhasil', ' ');
		redirect('Master/konsumen');
	}

	public function hapus_konsumen($id_customer)
	{
		$where = array('id' => $id_customer);
		$this->Model_master->hapus_data($where, 'customer');
		$this->session->set_flashdata('hapus-berhasil', ' ');
		redirect('Master/konsumen');
	}

	public function tambah_karyawan()
	{
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/create/tambah_karyawan');
		$this->load->view('dashboard/_partials/footer');
	}

	public function karyawan_save()
	{
		$id = uniqid();
		$nama_karyawan = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role');

		$data = array(
			'id_user' => $id,
			'nama' => $nama_karyawan,
			'username' => $username,
			'password' => $password,
			'role' => $role
		);

		$this->Model_master->insert_data($data, 'user');
		$this->session->set_flashdata('input-berhasil', ' ');
		redirect('Master/karyawan');
	}

	public function edit_karyawan($id_user)
	{

		$data['karyawan'] = $this->Model_master->getKaryawan();
		$where = array('id_user' => $id_user);
		$data['karyawan'] = $this->Model_master->edit_data_karyawan($where, 'user')->result();

		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/edit/edit_karyawan', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function edit_kategori($id_kategori)
	{
		// return 'hello';
		$data['kategori'] = $this->Model_master->getKategori();
		$where = array('id_kategori' => $id_kategori);
		$data['kategori'] = $this->Model_master->edit_data_kategori($where, 'kategori')->result();

		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('master/edit/edit_kategori', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function update_kategori()
	{
		$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');

		$data = array(
			'nama_kategori' => $nama_kategori,
		);

		$where = array(
			'id_kategori' => $id_kategori
		);

		$this->Model_master->update_data($where, $data, 'kategori');
		$this->session->set_flashdata('update-berhasil', ' ');
		redirect('Master/data_kategori');
	}

	public function hapus_kategori($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori);
		$this->Model_master->hapus_data($where, 'kategori');
		$this->session->set_flashdata('hapus-berhasil', ' ');
		redirect('Master/data_kategori');
	}

	public function update_karyawan()
	{
		$id_user = $this->input->post('id_user');
		$nama_karyawan = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = 5;

		$data = array(
			'nama' => $nama_karyawan,
			'username' => $username,
			'password' => $password,
			'role' => $role
		);

		$where = array(
			'id_user' => $id_user
		);

		$this->Model_master->update_data($where, $data, 'user');
		$this->session->set_flashdata('update-berhasil', ' ');
		redirect('Master/karyawan');
	}

	public function hapus_karyawan($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->Model_master->hapus_data($where, 'user');
		$this->session->set_flashdata('hapus-berhasil', ' ');
		redirect('Master/karyawan');
	}
}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */
