<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Home/Header');
		$this->load->view('Download/Home');
		$this->load->view('Home/Footer');
	}

}
?>