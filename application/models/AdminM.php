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

}