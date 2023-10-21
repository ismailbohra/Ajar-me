<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('HomeM');
        $this->load->model('AdminM');
	}

	public function index()
	{
        
		$data2['product_category'] = $this->AdminM->get_category();
		$this->load->view('Home/Header',$data2);
		$this->load->view('Contact/Home');
		$this->load->view('Home/Footer',$data2);
	}
	public function submit_message()
    {
        print_r($_POST);
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $message = $_POST['message'];
            $result = $this->HomeM->insert_message($name, $email, $contact, $message);
        }

        redirect(base_url('/admin/slider'));
    }
}
?>