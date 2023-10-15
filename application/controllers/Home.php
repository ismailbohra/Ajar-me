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
		$data2['product_category'] = $this->AdminM->get_category();
		$this->load->view('Home/Header',$data2);
		$this->load->view('Home/Home',$data);
		$this->load->view('Home/Footer');
	}
	
}
?>