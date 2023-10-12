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

    function insert_product($product_name, $product_desc, $product_category)
    {
        $sql = "INSERT INTO `products` (`product_name`,`product_description`,`product_category`) VALUES ('$product_name', '$product_desc', $product_category)";
        $query = $this->db->query($sql);
        return $this->db->insert_id();
    }

    function insert_product_image($product_id, $file_location)
    {
        $sql = "INSERT INTO `product-images` (`product_id`,`product_image_url`) VALUES ('$product_id', '$file_location')";
        $query = $this->db->query($sql);
        return $this->db->insert_id();
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

}