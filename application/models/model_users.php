<?php

class Model_users extends CI_Model{
    
    public function can_log_in(){
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('employee');
        if($query->num_rows() == 1){
            return true;
        } else {
            return false;
        }
    }
  
  function get_user_info(){
         $q=$this->db->query("SELECT * FROM `employee` WHERE `email`='".$_POST['email']."' && `password` = '".$_POST['password']."'");
        $num = $q->num_rows();
        
        if($num>0){
          return $q->result();
        }else{
             return FALSE;
        }
  
    }
}