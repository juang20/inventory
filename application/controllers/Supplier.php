<?php 
/**
 * 
 */
class Supplier extends CI_Controller
{
	

	public function index()
	{
		$data['meta'] = [
			'title' => 'Supplier',
		];

		$this->load->view('supplier/supplier.php', $data);
	}
}

 ?>