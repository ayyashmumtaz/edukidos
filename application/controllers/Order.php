<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$status = $this->session->userdata('role');
		if (!isset($status)) {
			redirect(base_url("Login"));
		}

		$this->load->model('Model_order');
		$this->load->model('Model_rekap');
	}

	public function input_penjualan()
	{
		$data['kategori'] = $this->Model_order->get_kategori();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('dashboard/input_penjualan',$data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function save_input_penjualan()
	{
		$kode_penjualan = uniqid();
		$subtotal_harga = $this->input->post('id_order');
		$jumlah = $this->input->post('jumlah');
		$id_produk = $this->input->post('id_produk');
		$status = 0;

		$data = [
			'kode_penjualan' => $kode_penjualan,
			'subtotal_harga' => $subtotal_harga,
			'jumlah' => $jumlah,
			'id_produk' => $id_produk,
			'status' => $status,
		];

		$this->Model_order->input_data($data, 'penjualan');
		$this->session->set_flashdata('order_berhasil', ' ');
		redirect('Order/input_penjualan');
	}

	public function apiProduk($id_produk)
	{
		$data['produk'] = $this->Model_order->get_produk_api($id_produk);
		echo json_encode($data);
	}


	public function input_order()
	{
		$data['customer'] = $this->Model_order->get_customer();
		$data['bahanBaku'] = $this->Model_order->get_bahanBaku();
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('dashboard/input_order', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	function tambah_order()
	{
		$id_order = $this->input->post('id_order');
		$tgl_order = $this->input->post('tgl_order');
		$no_inv = $this->input->post('no_inv');
		$no_po = $this->input->post('no_po');
		$urgensi = $this->input->post('urgensi');
		$nama = $this->input->post('nama');
		$nama_kerja = $this->input->post('nama_kerja');
		$id_barang  = $this->input->post('id_bahan');
		$jumlah = $this->input->post('jumlah');
		$panjang = $this->input->post('panjang');
		$lebar = $this->input->post('lebar');
		$panjang_roll = $this->input->post('panjang_roll');
		$biaya_design = $this->input->post('biaya_design');
		$harga_bahan = $this->input->post('harga_bahan');
		$dp_awal = $this->input->post('dp_awal');
		$catatan = $this->input->post('catatan');

		$hapusSelainAngka_biayaDesign = preg_replace('/[^0-9]/', '', $biaya_design);
		$hapusSelainAngka_hargaBahan = preg_replace('/[^0-9]/', '', $harga_bahan);
		$hapusSelainAngka_dpAwal = preg_replace('/[^0-9]/', '', $dp_awal);

		$config['upload_path']          = FCPATH . '/assets/data/';
		$config['allowed_types']        = '*';
		$config['file_name']            = $id_order;
		$config['max_size']             = 100000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('berkas')) {
			$where = [
				'id_order' => $id_order
			];

			$data = array(
				'id_order' => $id_order,
				'tgl_order' => $tgl_order,
				'no_po' => $no_po,
				'no_inv' => $no_inv,
				'nama_kerja' => $nama_kerja,
				'urgensi' => $urgensi,
				'nama' => $nama,
				'id_barang' => $id_barang,
				'jumlah' => $jumlah,
				'panjang' => $panjang,
				'lebar' => $lebar,
				'panjang_roll' => $panjang_roll,
				'biaya_design' => $hapusSelainAngka_biayaDesign,
				'harga_bahan' => $hapusSelainAngka_hargaBahan,
				'dp_awal' => $hapusSelainAngka_dpAwal,
				'catatan' => $catatan,
				'finishing' => 'cutting',
				'status' => 0,
				'status_bayar' => 0
			);

			$this->load->library('ciqrcode');

			$config['cacheable']    = true; //boolean, the default is true
			$config['cachedir']     = './assets/'; //string, the default is application/cache/
			$config['errorlog']     = './assets/'; //string, the default is application/logs/
			$config['imagedir']     = './assets/qrcache/'; //direktori penyimpanan qr code
			$config['quality']      = true; //boolean, the default is true
			$config['size']         = '1024'; //interger, the default is 1024
			$config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
			$config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
			$this->ciqrcode->initialize($config);

			$image_name = $id_order . '.png'; //buat name dari qr code sesuai dengan nim

			$params['data'] = $id_order; //data yang akan di jadikan QR CODE
			$params['level'] = 'H'; //H=High
			$params['size'] = 10;
			$params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
			$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

			$this->Model_order->input_data($data, 'orderan');
			$this->session->set_flashdata('order_berhasil', ' ');
			redirect('Order/input_order');

			echo $data['error'];
		} else {

			$fix_upload = $this->upload->data();

			$where = [
				'id_order' => $id_order
			];

			$new_data = array(
				'file' => $fix_upload['file_name']
			);

			$data_foto = $new_data['file'];
			$data = array(
				'id_order' => $id_order,
				'tgl_order' => $tgl_order,
				'no_po' => $no_po,
				'no_inv' => $no_inv,
				'nama_kerja' => $nama_kerja,
				'urgensi' => $urgensi,
				'nama' => $nama,
				'id_barang' => $id_barang,
				'jumlah' => $jumlah,
				'panjang' => $panjang,
				'lebar' => $lebar,
				'panjang_roll' => $panjang_roll,
				'file' => $data_foto,
				'biaya_design' => $hapusSelainAngka_biayaDesign,
				'harga_bahan' => $hapusSelainAngka_hargaBahan,
				'dp_awal' => $hapusSelainAngka_dpAwal,
				'catatan' => $catatan,
				'finishing' => 'cutting',
				'status' => 0,
				'status_bayar' => 0
			);

			$this->load->library('ciqrcode');

			$config['cacheable']    = true; //boolean, the default is true
			$config['cachedir']     = './assets/'; //string, the default is application/cache/
			$config['errorlog']     = './assets/'; //string, the default is application/logs/
			$config['imagedir']     = './assets/qrcache/'; //direktori penyimpanan qr code
			$config['quality']      = true; //boolean, the default is true
			$config['size']         = '1024'; //interger, the default is 1024
			$config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
			$config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
			$this->ciqrcode->initialize($config);

			$image_name = $id_order . '.png'; //buat name dari qr code sesuai dengan nim

			$params['data'] = $id_order; //data yang akan di jadikan QR CODE
			$params['level'] = 'H'; //H=High
			$params['size'] = 10;
			$params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
			$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

			$this->Model_order->input_data($data, 'orderan');
			$this->session->set_flashdata('order_berhasil', ' ');
			redirect('Order/input_order');
		}
	}

	public function cari()
	{
		$id = $this->input->get('id');
		$cari = $this->Model_order->cari($id)->result();
		echo json_encode($cari);
	}

	public function cariBahan($id)
	{
		$cariBah = $this->Model_order->cariBahan($id)->result();
		echo json_encode($cariBah);
	}

	public function detail_order($id_order)
	{
		$data['detailOrder'] = $this->Model_rekap->getDetailOrder($id_order);
		$this->load->view('dashboard/_partials/header');
		$this->load->view('dashboard/_partials/sidebar');
		$this->load->view('dashboard/detail_order', $data);
		$this->load->view('dashboard/_partials/footer');
	}

	public function cari_bahan($id_bahan)
	{
		$cariBahan = $this->Model_order->cari_bahan($id_bahan);
		echo json_encode($cariBahan);
	}
}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */
