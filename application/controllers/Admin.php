<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('AdminM');
    }

    public function index()
    {
        $this->load->view('Admin/Login');
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $check = $this->AdminM->check_user($username, md5($password));
        if ($check) {
            $_SESSION['user'] = $username;
            redirect(base_url('/admin/home'));
        } else {
            redirect(base_url('/admin'));
        }
    }

    public function home()
    {
        if ($_SESSION['user']) {
            $this->load->view('Admin/Header');
            $this->load->view('Admin/AddProduct');
        } else {
            redirect(base_url('/admin'));
        }
    }
}
?>