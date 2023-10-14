<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('HomeM');
        $this->load->model('AdminM');
	}

	public function index()
	{
		$data['slider_image'] = $this->AdminM->get_slider_image();
		$this->load->view('Home/Header');
		$this->load->view('Home/Home',$data);
		$this->load->view('Home/Footer');
	}
	
}
?>