<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->library('session');
		$this->load->model('HomeM');
		// if(!isset($_SESSION['user'])){
		// 	redirect(base_url());
		// }
	}

	public function index()
	{
		$data['data'] = $this->HomeM->getData();
		$this->load->view('Home/Home', $data);
	}

}
?>