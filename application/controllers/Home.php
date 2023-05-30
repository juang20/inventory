<?php 
/**
 * 
 */
class Home extends CI_Controller
{
	

	public function index ()
	{
		
		$data['meta'] = [
			'title' => 'Home',
		];

		$this->load->view('home', $data);
	}

	public function barang()
	{
		$data['meta'] = [
			'title' => 'Barang',
		];

		$this->load->view('barang', $data);
	}
}

 ?>