<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class About extends CI_Controller
{

	function __construct()
	{
		parent::__construct();		
	}

	public function Certifications()
	{		
		$this->load->view('Components/Header');
		$this->load->view('About/Certificate');
		$this->load->view('Components/Footer');
	}

}
?>