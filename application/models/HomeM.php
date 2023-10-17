<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class HomeM extends CI_Model
{
  function __construct()
  {
    // Call the Model constructor
    parent::__construct();
  }

  function getData()
  {

    $sql = "SELECT * from `login` where `active`= 1";
    $query = $this->db->query($sql);
    return $query->result_array();

  }
  function insert_message($name, $email, $contact, $message)
  {
    $data = array(
      'name' => $name,
      'email' => $email,
      'contact' => $contact,
      'message' => $message
    );

    $this->db->insert('message', $data);

    return $this->db->insert_id();
  }
  function insert_query($name, $email, $contact, $requirments, $company, $address, $product_id, $user)
  {
    $data = array(
      'name' => $name,
      'user' => $user,
      'email' => $email,
      'contact' => $contact,
      'requirements' => $requirments,
      'company' => $company,
      'address' => $address,
      'product_id' => $product_id
    );

    $this->db->insert('enquiry', $data);

    return $this->db->insert_id();
  }

  function get_products()
  {
    $sql = "SELECT distinct * from `products` order by product_name ";
    $query = $this->db->query($sql);
    return $query->result_array();
  }

  function get_product_image($product_id)
  {
    $sql = " SELECT product_image_url from `product_images` where product_images.product_id = $product_id Order By product_images.id LIMIT 1";
    $query = $this->db->query($sql);
    return $query->result_array();
  }
}