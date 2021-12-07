<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_Dashboard", "model");
		$this->load->model("M_Tools", "tools");

		// if ($this->session->userdata('username') != true) {
		// 	$this->session->set_flashdata('notif_login', '<script>toastr.warning("Anda Tidak Memiliki Akses !", "Warning !", {"timeOut": "2000","extendedTImeout": "0"});</script>');
		// 	redirect('');
		// } else if ($this->session->userdata('username') == true && $this->session->userdata('level') != "Admin") {
		// 	$this->session->set_flashdata('notif_login', '<script>toastr.warning("Anda Tidak Memiliki Akses !", "Warning !", {"timeOut": "2000","extendedTImeout": "0"});</script>');
		// 	redirect('DashboardLPK');
		// }
	}

	private function load($title = '', $datapath = '')
	{
		$data = array(
			'pelatihan' => $this->model->dataPelatihan()
		);
		$page = array(
			"head" => $this->load->view('dashboard/template/head', array("title" => $title), true),
			"footer" => $this->load->view('dashboard/template/footer', false, true),
			"sidebar" => $this->load->view('dashboard/template/sidebar', $data, true),
		);
		return $page;
	}

	public function index()
	{
		$index = array(
			'jumlahLPK' => $this
			->model
			->jumlahLPK(),
			'jumlahBLKLN' => $this
			->model
			->jumlahBLKLN(),
			'jumlahKegiatan' => $this
			->model
			->jumlahKegiatan(),
			'jumlahPeserta' => $this
			->model
			->jumlahPeserta(),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Dashboard", $path),
			"content" => $this->load->view('dashboard/index', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function dpDaftar()
	{
		$index = array();
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Pendaftaran", $path),
			"content" => $this->load->view('dashboard/dpDaftar', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function dpCalon()
	{
		$index = array();
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Calon Peserta", $path),
			"content" => $this->load->view('dashboard/dpCalon', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function dpPeserta()
	{
		$index = array();
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Data Peserta", $path),
			"content" => $this->load->view('dashboard/dpPeserta', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function dplPelatihan()
	{
		$pelatihan = array(
			'jenis' => $this
			->model
			->dataJenis(),
			'kategori' => $this
			->model
			->dataKategori(),
			'pelatihan' => $this
			->model
			->dataPelatihan()
		);
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Pelatihan", $path),
			"content" => $this->load->view('dashboard/dplPelatihan', $pelatihan, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function dplPeserta()
	{
		$index = array();
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Data Peserta Pelatihan", $path),
			"content" => $this->load->view('dashboard/dplPeserta', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function dlCalon()
	{
		$index = array();
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Data Calon LPK", $path),
			"content" => $this->load->view('dashboard/dlCalon', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function dlLPK()
	{
		$index = array();
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Data LPK", $path),
			"content" => $this->load->view('dashboard/dlLPK', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function dlLaporan()
	{
		$index = array();
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Data Status Laporan", $path),
			"content" => $this->load->view('dashboard/dlLaporan', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function lapPelatihan()
	{
		$index = array();
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Laporan Pelatihan", $path),
			"content" => $this->load->view('dashboard/lapPelatihan', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function lapLPK()
	{
		$index = array();
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Laporan LPK", $path),
			"content" => $this->load->view('dashboard/lapLPK', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function lapStatus()
	{
		$index = array();
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Laporan Status Peserta", $path),
			"content" => $this->load->view('dashboard/lapStatus', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function cmsInfo()
	{
		$index = array();
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - CMS Info", $path),
			"content" => $this->load->view('dashboard/cmsInfo', $index, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function cmsYoutube()
	{
		// $kode = $this->session->userdata['kode'];
		$slider = array(
			'slider' => $this
			->model
			->dataYoutube('ADMIN'),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Youtube", $path),
			"content" => $this->load->view('dashboard/cmsYoutube', $slider, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function cmsSlider()
	{
		$slider = array(
			'slider' => $this
			->model
			->dataSlider('ADMIN'),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - CMS Slider", $path),
			"content" => $this->load->view('dashboard/cmsSlider', $slider, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function cmsText()
	{
		$marquetext = array(
			'marquetext' => $this
			->model
			->dataMarquetext('ADMIN'),
		);
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - CMS Text Berjalan", $path),
			"content" => $this->load->view('dashboard/cmsText', $marquetext, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function mJenis()
	{
		$jenis = array(
			'jenis' => $this
			->model
			->dataJenis()
		);
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Data Master Pelatihan", $path),
			"content" => $this->load->view('dashboard/mJenis', $jenis, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}

	public function mKategori()
	{
		$kategori = array(
			'kategori' => $this
			->model
			->dataKategori()
		);
		$path = "";
		$data = array(
			"page" => $this->load("Pelatihan Kota Depok - Data Master Kategori", $path),
			"content" => $this->load->view('dashboard/mKategori', $kategori, true),
		);
		$this->load->view('dashboard/template/default_template', $data);
	}
}
