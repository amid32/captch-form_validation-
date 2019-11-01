<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
   public function __construct(){
      
    }
    public $dt_table = 'user_login';

   
 public function get($where = array()){
    $row = $this->db->where($where)->get($this->dt_table)->row();
    return $row;
}

    
}




?>
