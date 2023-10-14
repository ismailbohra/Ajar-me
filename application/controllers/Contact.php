<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('HomeM');
	}

	public function index()
	{
		$this->load->view('Home/Header');
		$this->load->view('Contact/Home');
		$this->load->view('Home/Footer');
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