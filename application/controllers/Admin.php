<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('AdminM');
		$this->load->model('HomeM');
    }

    public function index()
    {
        if (!empty($_SESSION['user'])) {
            redirect('/admin/home');
        }
        $this->load->view('Admin/Login');
    }

    public function login()
    {
        if (!empty($_SESSION['user'])) {
            redirect('/admin/home');
        }
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
        if (empty($_SESSION['user'])) {
            redirect('/admin');
        }
        $data['products'] = array();
        $filter = "";
        $sort = "";
        if (!empty($_GET)) {

            if (!empty($_GET['sort'])) {
                $data['sort'] = $_GET['sort'];
                $temp = explode('-', $_GET['sort']);
                if ($temp[0] == "name") {
                    $sort = "product_name " . $temp[1] . ", ";
                } else {
                    $sort = "timestamp " . $temp[1] . ", ";
                }
            }

            if (!empty($_GET['filter'])) {
                $data['filter_string'] = $_GET['filter'];
                $data['filter'] = explode(',', $_GET['filter']);
                $filter = "where product_category in (" . $_GET['filter'] . ")";
            }

            $data['products'] = $this->AdminM->get_filtered_sorted_products($filter, $sort);
        } else {
            $data['products'] = $this->AdminM->get_products();
        }


        $i = 0;
        foreach ($data['products'] as $p) {
            $product_image = $this->AdminM->get_product_image($p['id']);
            if (!empty($product_image)) {
                $data['products'][$i]['product_image_url'] = $product_image[0]['product_image_url'];
            } else {
                $data['products'][$i]['product_image_url'] = "";
            }
            $i++;
        }

        $this->load->view('Admin/Header');
        $this->load->view('Admin/Product', $data);
    }

    public function view_product($product_id)
    {

        if (empty($_SESSION['user'])) {
            redirect('/admin');
        }

        $data['product'] = $this->AdminM->get_product_details($product_id)[0];
        $product_images = $this->AdminM->get_product_images($product_id);
        $i = 0;
        foreach ($product_images as $p) {
            $data['product']['product_image_url'][$i] = $p['product_image_url'];
            $i++;
        }
        $data['header'] = json_decode($data['product']['table_header'], true);
        $data['row'] = json_decode($data['product']['table_row'], true);
        $data['product']['product_description']= json_decode($data['product']['product_description'],true);
        // echo '<pre>';
        // echo $data;
        // die();
        $this->load->view('Admin/Header');
        $this->load->view('Admin/ViewProduct', $data);
    }

    public function add_product()
    {
        if ($_SESSION['user']) {

            $data['product_category'] = $this->AdminM->get_category();
            $this->load->view('Admin/Header');
            $this->load->view('Admin/AddProduct', $data);
        } else {
            redirect(base_url('/admin'));
        }
    }

    public function edit_product($product_id)
    {
        if ($_SESSION['user']) {

            $data['product'] = $this->AdminM->get_product_details($product_id)[0];
            $product_images = $this->AdminM->get_product_images($product_id);
            $data['product_category'] = $this->AdminM->get_category();
            $data['product']['product_image_url'] = array();
            $i = 0;
            foreach ($product_images as $p) {
                $data['product']['product_image_url'][$i] = $p['product_image_url'];
                $i++;
            }
            $data['header'] = json_decode($data['product']['table_header'], true);
            $data['row'] = json_decode($data['product']['table_row'], true);
            $data['product']['product_description']=json_decode($data['product']['product_description'],true);
            $this->load->view('Admin/Header');
            $this->load->view('Admin/EditProduct', $data);
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

    public function enquiry()
    {
        if ($_SESSION['user']) {
            $data['enquires'] = $this->AdminM->get_enquiry();
            $this->load->view('Admin/Header');
            $this->load->view('Admin/Enquiry', $data);
        } else {
            redirect(base_url('/admin'));
        }
    }
    public function messages()
    {
        if ($_SESSION['user']) {
            $data['messages'] = $this->AdminM->get_message();
            $this->load->view('Admin/Header');
            $this->load->view('Admin/Messages', $data);
        } else {
            redirect(base_url('/admin'));
        }
    }

    public function update_product()
    {

        if (empty($_SESSION['user'])) {
            redirect('/admin');
        }
        $header = "";
        $row = "";

        if (!empty($_POST)) {
            if (!empty($_POST['header'])) {
                $header = json_encode($_POST['header']);
            }
            if (!empty($_POST['row'])) {
                $row = json_encode($_POST['row']);
            }
            $product_id = $_POST['product-id'];
            $product_name = $_POST['product-name'];
            $i=0;
            foreach ($_POST['product-desc'] as $pd) {
                $_POST['product-desc'][$i]=str_replace(',', ';', $pd);
                $_POST['product-desc'][$i]=str_replace('"', '|', $pd);
                $i++;
            }
            $product_desc = json_encode($_POST['product-desc']);
            $product_category = $_POST['product-category'];

            $this->AdminM->update_product_details($product_id, $product_name, $product_desc, $product_category,$header,$row);

            $product = array();
            if (isset($_POST['previous'])) {
                $product_images = $_POST['previous'];
                $product = $this->AdminM->get_product_images($product_id);

                if (count($product_images) != count($product)) {
                    $product_image_string = "";
                    $i = 0;
                    foreach ($product_images as $p) {
                        $product_image_string .= "'" . $p . "'";
                        if ($i < count($product_images) - 1) {
                            $product_image_string .= ',';
                        }
                        $i++;
                    }

                    $this->AdminM->update_product_images($product_id, $product_image_string);
                }

            } else {
                $this->AdminM->delete_product_images($product_id);
            }


            if (!empty($_FILES['product-image'])) {
                $i = 0;
                foreach ($_FILES['product-image']['tmp_name'] as $file_tmp) {

                    if (!empty($file_tmp)) {
                        $file_name = "/uploads/Product_Images/" . $product_id . "-" . $i + 1 + count($product) . "_" . $_FILES['product-image']['name'][$i];
                        $location = pathinfo(pathinfo(__DIR__, PATHINFO_DIRNAME), PATHINFO_DIRNAME);
                        $file_location = $location . "/" . $file_name;

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

        redirect('/admin/home');
    }

    public function submit_product()
    {
        if (empty($_SESSION['user'])) {
            redirect('/admin');
        }
        $header = "";
        $row = "";

        if (!empty($_POST)) {
            if (!empty($_POST['header'])) {
                $header = json_encode($_POST['header']);
            }
            if (!empty($_POST['row'])) {
                $row = json_encode($_POST['row']);
            }
            $product_name = $_POST['product-name'];
            $product_code = $_POST['product-code'];
            $i=0;
            foreach ($_POST['product-desc'] as $pd) {
                $_POST['product-desc'][$i]=str_replace(',', ';', $pd);
                $_POST['product-desc'][$i]=str_replace('"', '|', $pd);
                $i++;
            }           
            $product_desc = json_encode(str_replace(',', ';', $_POST['product-desc']));
            $product_category = $_POST['product-category'];
            $product_id = $this->AdminM->insert_product($product_name, $product_desc, $product_category, $product_code, $header, $row);

            if (!empty($_FILES['product-image'])) {
                $i = 0;
                foreach ($_FILES['product-image']['tmp_name'] as $file_tmp) {

                    if (!empty($file_tmp)) {
                        $file_name = "/uploads/Product_Images/" . $product_id . "-" . $i + 1 . "_" . $_FILES['product-image']['name'][$i];
                        $location = pathinfo(pathinfo(__DIR__, PATHINFO_DIRNAME), PATHINFO_DIRNAME);
                        $file_location = $location . "/" . $file_name;

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

        redirect('/admin/home');
    }

    public function submit_slider_images()
    {
        if (empty($_SESSION['user'])) {
            redirect('/admin');
        }
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
    public function delete_slider_image()
    {

        if (empty($_SESSION['user'])) {
            redirect('/admin');
        }

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


    public function delete_product($product_id)
    {

        if (empty($_SESSION['user'])) {
            redirect('/admin');
        }

        $this->AdminM->delete_product($product_id);
        redirect('/admin/home');
    }
    public function featured_product($product_id)
    {

        if (empty($_SESSION['user'])) {
            redirect('/admin');
        }

        $this->AdminM->featured_product($product_id);
        redirect('/admin/home');
    }
}