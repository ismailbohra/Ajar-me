<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Showroom extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('AdminM');
	}

	public function index()
	{
		
		$data2['product_category'] = $this->AdminM->get_category();
		$this->load->view('Home/Header',$data2);
		$this->load->view('Showroom/showroom');
		$this->load->view('Home/Footer');
	}

}
?>