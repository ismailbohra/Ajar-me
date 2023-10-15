<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('AdminM');
        $this->load->model('HomeM');
    }

    public function index()
    {
        $data['products'] = array();
        $filter = "";
        $sort = "";
        if(!empty($_GET)){

            if(!empty($_GET['sort'])){
                $data['sort'] = $_GET['sort'];
                $temp = explode('-',$_GET['sort']);
                if($temp[0]=="name"){
                    $sort = "product_name ".$temp[1].", ";                    
                }else{
                    $sort = "timestamp ".$temp[1].", ";
                }
            }

            if(!empty($_GET['filter'])){
                $data['filter_string'] = $_GET['filter'];
                $data['filter'] = explode(',', $_GET['filter']);
                $filter = "where product_category in (".$_GET['filter'].")";
            }

            $data['products'] = $this->AdminM->get_filtered_sorted_products($filter, $sort);
        }else{
            $data['products'] = $this->AdminM->get_products(); 
        }


        $i = 0;
        foreach ($data['products'] as $p) {
            $product_image = $this->AdminM->get_product_image($p['id']);
            if(!empty($product_image)){
                $data['products'][$i]['product_image_url'] = $product_image[0]['product_image_url']; 
            }else{
                $data['products'][$i]['product_image_url'] = "";
            }
            $i++;
        }        

        $this->load->view('Home/Header');
        $this->load->view('Product/Home', $data);
        $this->load->view('Home/Footer');
    }

    public function product($product_id)
    {
        $data['product'] = $this->AdminM->get_product_details($product_id)[0];
        $product_images = $this->AdminM->get_product_images($product_id);
        $i=0;
        foreach($product_images as $p){
            $data['product']['product_image_url'][$i] = $p['product_image_url'];
            $i++;
        }

        $this->load->view('Home/Header');
        $this->load->view('Product/Product', $data);
        $this->load->view('Home/Footer');
    }
    public function send_enquiry()
    {
        $user = $_POST['user'];
        $name = $_POST['name'];
        $email = $_POST['Email'];
        $contact = $_POST['contact'];
        $requirments = $_POST['requirments'];
        $company = $_POST['company'];
        $address = $_POST['address'];
        $product_id = $_POST['product_id'];
        $result = $this->HomeM->insert_query(
            $name,
            $email,
            $contact,
            $requirments,
            $company,
            $address,
            $product_id,
            $user
        );

        // Return a response (success or error) to the client
        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to send query']);
        }
    }
    
}
?>