<?php 
/**
 * 
 */
class Kategori extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
	}

	public function index()
	{
		// $data['meta'] = [
		// 	'title' => 'Kategori',
		// ];

		$queryKategori = $this->Kategori_model->getDataKategori();
		$data = array ('queryKategori' => $queryKategori, 'title' => 'Kategori');

		$this->load->view('Kategori/kategori', $data);
	}

	public function tambah_kategori(){
		$this->load->view('Kategori/tambah_kategori');
	}

	public function proses_tambah_kategori(){
		$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		$keterangan = $this->input->post('keterangan');

		$arrInsert = array (
			'id_kategori' => $id_kategori,
			'nama_kategori' => $nama_kategori,
			'keterangan' => $keterangan,
		);

		$this->Kategori_model->insertDataKategori($arrInsert);
		redirect(site_url('kategori'));
	}

	public function halamanEdit($id_kategori)
	{
		$queryKategoriDetail = $this->Kategori_model->getDataKategoriDetail($id_kategori);
		$data = array('queryKtgDetail' => $queryKategoriDetail) ;
		$this->load->view('kategori/edit_kategori', $data);
	}

	public function fungsiEditKategori() 
	{
		$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		$keterangan = $this->input->post('keterangan');

		$arrUpdate = array (
			'nama_kategori' => $nama_kategori,
			'keterangan' => $keterangan,
		);

		$this->Kategori_model->updateDataKategori($id_kategori, $arrUpdate);
		redirect(site_url('kategori'));
	}


	public function fungsiDeleteDataKategori($id_kategori)
	{
		$this->Kategori_model->deleteDataKategori($id_kategori);
		redirect(site_url('kategori'));
	}
}

 ?>