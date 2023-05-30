<?php 
/**
 * 
 */
class Item extends CI_Controller
{
	

	public function index()
	{
		$data['meta'] = [
			'title' => 'Item',
		];

		$this->load->view('item/item.php', $data);
	}
}

 ?>