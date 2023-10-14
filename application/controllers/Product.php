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
        $data['products'] = $this->AdminM->get_products(); 

        $i=0;
        foreach($data['products'] as $p){
            $data['products'][$i]['product_image_url'] = $this->AdminM->get_product_image($p['id']);
            $i++;
        }
        $this->load->view('Home/Header');
        $this->load->view('Product/Home', $data);
        $this->load->view('Home/Footer');
    }

    public function product($product_id)
    {
        $data['product'] = $this->AdminM->get_product_details($product_id);

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