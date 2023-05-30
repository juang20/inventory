<?php 
/**
 * 
 */
class Dasboard extends CI_Controller
{
	

	public function index()
	{
		$data['meta'] = [
			'title' => 'Dasboard',
		];

		$this->load->view('dasboard/dasboard', $data);
	}
}

 ?>