<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('Home/Header');
        $this->load->view('Product/Home');
        $this->load->view('Home/Footer');
    }

}
?>