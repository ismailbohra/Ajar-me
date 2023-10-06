<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('HomeM');
	}

	public function index()
	{
		$this->load->view('Home/Header');
		$this->load->view('Home/Home');
		$this->load->view('Home/Footer');
	}

}
?>