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
            $data['slider_image'] = $this->AdminM->get_slider_image();
            $this->load->view('Admin/Header');
            $this->load->view('Admin/Slider', $data);
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
    public function submit_slider_images()
    {
        if (!empty($_POST)) {

            if (!empty($_FILES['product-image'])) {
                echo "file temp location => " . $_FILES['product-image']['tmp_name'];
                echo "<br>";
                $file_name = "/uploads/Slider_Images/" . $_FILES['product-image']['name'];
                $location = pathinfo(pathinfo(__DIR__, PATHINFO_DIRNAME), PATHINFO_DIRNAME);
                $file_location = $location . "/" . $file_name;
                echo "file location => " . $file_location;
                echo "<br>";
                if (!is_dir('uploads/Slider_Images')) {
                    mkdir("uploads/Slider_Images", 0777, true);
                }

                if (move_uploaded_file($_FILES['product-image']['tmp_name'], $file_location)) {

                    chmod($file_location, 0777);
                    $this->AdminM->insert_slider_image($file_name);
                }
            }
        }
        
        redirect(base_url('/admin/slider'));
    }
    public function delete_slider_image() {
        $imageUrl = $this->input->post('imageUrl');
    
        // Implement the logic to delete the image in your model
        $result = $this->AdminM->delete_slider_image($imageUrl);
    
        // Return a response (success or error) to the client
        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to delete image']);
        }
    }
    

}
?>