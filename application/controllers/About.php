<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class About extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('AdminM');
	}

	public function Certifications()
	{

		$data2['product_category'] = $this->AdminM->get_category();
		$this->load->view('Home/Header', $data2);
		$this->load->view('About/Certificate');
		$this->load->view('Home/Footer');
	}
	public function Company()
	{

		$data2['product_category'] = $this->AdminM->get_category();
		$this->load->view('Home/Header', $data2);
		$this->load->view('About/Company');
		$this->load->view('Home/Footer');
	}

}
?>