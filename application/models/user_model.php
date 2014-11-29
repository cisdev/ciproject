<?php

Class User_model extends CI_Model
{
    
    function contruct__()
    {
        parent::__construct();
        
    }
    
    function user_list()
    {
      //$this->load->database();
      $query = $this->db->get('ci_users');   
      $result = $query->result();
      return $result;
     }
    
    
}
?>