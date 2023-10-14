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
  function insert_query($name, $email, $contact, $requirments, $company, $address, $product_id,$user)
  {
    $data = array(
      'name' => $name,
      'user' => $user,
      'email' => $email,
      'contact' => $contact,
      'requirments' => $requirments,
      'company' => $company,
      'address' => $address,
      'product_id' => $product_id
    );

    $this->db->insert('enquiry', $data);

    return $this->db->insert_id();
  }
}