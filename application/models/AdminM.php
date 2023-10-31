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
    $sql = "SELECT * FROM `login` WHERE `username` = ? AND `password` = ? AND `active` = 1";

    $query = $this->db->query($sql, array($username, $password));

    return $query->result_array();
}

    function get_products()
    {
        $sql = " SELECT * from `products`Order By products.id desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function get_featured_product()
    {
        $sql = " SELECT * from `products` WHERE products.featured=1 Order By products.id desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function get_products_by_category($category)
    {
        $sql = " SELECT * from `products` WHERE products.product_category=$category";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function get_searched_products($value)
    {
        $sql = " SELECT * from `products` WHERE product_name LIKE '%$value%' OR product_code LIKE '%$value%' ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_searched_filtered_sorted_products($filter, $sort, $value)
    {
        $sql = " SELECT * from `products` WHERE (product_name LIKE '%$value%' OR product_code LIKE '%$value%') $filter Order By $sort products.id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_filtered_sorted_products($filter, $sort)
    {
        $sql = " SELECT * from `products` $filter Order By $sort products.id desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_filtered_sorted_products_by_category($filter, $sort, $category)
    {
        $sql = " SELECT * from `products` WHERE product_category=$category $filter Order By $sort products.id desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_product_image($product_id)
    {
        $sql = " SELECT product_image_url from `product_images` where product_images.product_id = $product_id Order By product_images.id LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_product_details($product_id)
    {
        $sql = " SELECT products.* from `products` where products.id = $product_id Order By products.id desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_product_images($product_id)
    {
        $sql = "SELECT product_image_url from `product_images` where product_images.product_id = $product_id Order By product_images.id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function insert_product($product_name, $product_desc, $product_category, $product_code, $header, $row)
    {
        $sql = "INSERT INTO `products` (`product_name`,`product_description`,`product_category`,`product_code`,`table_header`,`table_row`) VALUES ('$product_name', '$product_desc', $product_category,'$product_code','$header','$row')";
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
    function insert_featured_project($file_location,$description)
    {
        $sql = "INSERT INTO `featured_project` (`project_image_url`,`description`) VALUES ('$file_location','$description')";
        $query = $this->db->query($sql);
        return $this->db->insert_id();
    }
    function insert_featured_products($file_location,$description ,$product_category)
    {
        $sql = "INSERT INTO `featured_products` (`product_image_url`,`description`,`product_category`) VALUES ('$file_location','$description','$product_category')";
        $query = $this->db->query($sql);
        return $this->db->insert_id();
    }
    function get_slider_image()
    {
        $sql = "SELECT * from `slider-images`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function get_featured_project()
    {
        $sql = "SELECT * from `featured_project`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function get_featured_products()
    {
        $sql = "SELECT * from `featured_products`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function delete_slider_image($filename)
    {
        $sql = "DELETE FROM `slider-images` WHERE `slider_image_url` = '$filename'";
        $query = $this->db->query($sql);
        return $query;
    }
    function delete_featured_product($filename)
    {
        $sql = "DELETE FROM `featured_products` WHERE `product_image_url` = '$filename'";
        $query = $this->db->query($sql);
        return $query;
    }
    function delete_featured_project($filename)
    {
        $sql = "DELETE FROM `featured_project` WHERE `project_image_url` = '$filename'";
        $query = $this->db->query($sql);
        return $query;
    }

    function delete_product_images($product_id)
    {
        $sql = "DELETE FROM `product_images` WHERE `product_id` = '$product_id'";
        $query = $this->db->query($sql);
        return $query;
    }
    function featured_product($product_id)
    {
        $sql = "UPDATE `products` SET `featured` = CASE WHEN `featured` = 1 THEN 0 ELSE 1 END WHERE `id` = '$product_id'";
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

    function update_product_details($product_id, $product_name, $product_desc, $product_category, $header, $row, $product_code)
    {
        $sql = "UPDATE `products` SET `product_name` = '$product_name', `product_description`='$product_desc', `table_header`='$header', `table_row`='$row', `product_code`='$product_code', `product_category`=$product_category WHERE `id` = $product_id ";
        $query = $this->db->query($sql);
        return;
    }

    function update_product_images($product_id, $product_image_string)
    {
        $sql = "DELETE FROM `product_images` WHERE `product_id` = $product_id AND `product_image_url` NOT IN ($product_image_string) ";

        $query = $this->db->query($sql);
        return;
    }

    function get_message()
    {
        $sql = "SELECT * from `message` ORDER BY `timestamp` DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function get_enquiry()
    {
        $sql = "SELECT * from `enquiry` ORDER BY `timestamp` DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function get_category()
    {
        $sql = "SELECT * from `category` ORDER BY `id`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}