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
    public function slider()
    {
        if ($_SESSION['user']) {
            $this->load->view('Admin/Header');
            $this->load->view('Admin/Slider');
        } else {
            redirect(base_url('/admin'));
        }
    }
    public function enquirey()
    {
        if ($_SESSION['user']) {
            $this->load->view('Admin/Header');
            $this->load->view('Admin/Enquiry');
        } else {
            redirect(base_url('/admin'));
        }
    }

    public function submit_product()
    {
        if (!empty($_POST)) {
            $product_name = $_POST['product-name'];
            $product_desc = $_POST['product-desc'];
            $product_category = $_POST['product-category'];
            $product_id = $this->AdminM->insert_product($product_name, $product_desc, $product_category);
            print_r($product_id);
            if (!empty($_FILES['product-image'])) {
                $i = 0;
                foreach ($_FILES['product-image']['tmp_name'] as $file_tmp) {
                    echo "file temp location => " . $file_tmp;
                    echo "<br>";
                    if (!empty($file_tmp)) {
                        $file_name = "/uploads/Product_Images/" . $product_id . "-" . $i . "_" . $_FILES['product-image']['name'][$i];
                        $location = pathinfo(pathinfo(__DIR__, PATHINFO_DIRNAME), PATHINFO_DIRNAME);
                        $file_location = $location . "/" . $file_name;
                        echo "file location => " . $file_location;
                        echo "<br>";
                        if (!is_dir('uploads/Product_Images')) {
                            mkdir("uploads/Product_Images", 0777, true);
                        }

                        if (move_uploaded_file($file_tmp, $file_location)) {
                            chmod($file_location, 0777);
                            $this->AdminM->insert_product_image($product_id, $file_name);
                        }
                    }
                    $i++;
                }
            }
        }
        echo "done";
        die();
    }

}
?>