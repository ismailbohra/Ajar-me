<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeM extends CI_Model {
  function __construct()
  {
      // Call the Model constructor
      parent::__construct();
  }
  
  function getData(){

    $sql="SELECT * from `login` where `active`= 1";    
    $query = $this->db->query($sql);
    return $query->result_array();

  }

}
