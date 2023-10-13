<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdminM extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function check_user($username, $password)
    {

        $sql = "SELECT * from `login` where `username`='$username' and `password`='$password' and `active`= 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_products()
    {
        $sql = " SELECT * from `products`Order By products.id desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_product_image($product_id)
    {
        $sql = " SELECT product_image_url from `product_images` where product_images.product_id = $product_id Order By product_images.id desc LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result_array()[0]['product_image_url'];
    }

    function get_product_details($product_id)
    {
        $sql = " SELECT products.*, product_images.product_image_url from `products`, `product_images` where products.id = $product_id and products.id = product_images.product_id Order By products.id desc, product_images.id desc ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function insert_product($product_name, $product_desc, $product_category)
    {
        $sql = "INSERT INTO `products` (`product_name`,`product_description`,`product_category`) VALUES ('$product_name', '$product_desc', $product_category)";
        $query = $this->db->query($sql);
        return $this->db->insert_id();
    }

    function insert_product_image($product_id, $file_location)
    {
        $sql = "INSERT INTO `product_images` (`product_id`,`product_image_url`) VALUES ('$product_id', '$file_location')";
        $query = $this->db->query($sql);
        return;
    }
    function insert_slider_image($file_location)
    {
        $sql = "INSERT INTO `slider-images` (`slider_image_url`) VALUES ('$file_location')";
        $query = $this->db->query($sql);
        return $this->db->insert_id();
    }
    function get_slider_image()
    {
        $sql = "SELECT * from `slider-images`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function delete_slider_image($filename)
    {
        $sql = "DELETE FROM `slider-images` WHERE `slider_image_url` = '$filename'";
        $query = $this->db->query($sql);
        return $query;
    }

    function delete_product($product_id)
    {
        $sql = "DELETE FROM `products` where products.id = $product_id ";
        $sql2 = "DELETE FROM `product_images` where product_images.product_id = $product_id ";
        $query = $this->db->query($sql);
        $query = $this->db->query($sql2);
        return;
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
    function get_message()
    {
        $sql = "SELECT * from `message`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
