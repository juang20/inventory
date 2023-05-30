<?php 
/**
 * 
 */
class User extends CI_Controller
{
	

	public function index()
	{
		$data['meta'] = [
			'title' => 'User',
		];

		$this->load->view('user/user.php', $data);
	}
}

 ?>