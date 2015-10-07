<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Asset_model extends CI_Model{
    
     function __construct() {
        $this->postTable = 'posts';
    }
    public function get_all(){
            
            $this->db->select('*');
            $this->db->from('computer c'); 
            $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {   
                return $query->result_array();
            }
            else
            {
                return false;
            }
        
    }
    
    public function get_allhw(){
            
            $this->db->select('*');
            $this->db->from('hardware h'); 
            $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {   
                return $query->result_array();
            }
            else
            {
                return false;
            }
        
    }
    
    public function get_allsw(){
            
            $this->db->select('*');
            $this->db->from('software s'); 
            $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {   
                return $query->result_array();
            }
            else
            {
                return false;
            }
        
    }
    
    public function pc_exists(){
        $this->db->where('comp_num', $this->input->post('comp_num'));
        $query = $this->db->get('computer');
        if($query->num_rows() == 1){
            return false;
        } else {
            return true;
        }
    }
    
    public function hw_exists(){
        $this->db->where('hw_serialno', $this->input->post('hw_serialno'));
        $query = $this->db->get('hardware');
        if($query->num_rows() == 1){
            return false;
        } else {
            return true;
        }
    }
    
    public function sw_exists(){
        $this->db->where('sw_productkey', $this->input->post('sw_productkey'));
        $query = $this->db->get('software');
        if($query->num_rows() == 1){
            return false;
        } else {
            return true;
        }
    }
    
    
    public function addpc(){
     $array=array('comp_num'=>$_POST['comp_num'],'status'=>$_POST['status'],'location'=>strtoupper($_POST['location']));
     $this->db->set($array);
     $query=$this->db->insert('computer');
      return $query;
    }
    
    public function addhw(){
     $array=array('hw_name'=>$_POST['hw_name'],'hw_status'=>$_POST['hw_status'],'hw_description'=>$_POST['hw_description'],
                  'hw_serialno'=>$_POST['hw_serialno'],'hw_dateinstalled'=>$_POST['hw_dateinstalled'],'hw_comp_id'=>$_POST['hw_comp_id'] );
     $this->db->set($array);
     $query=$this->db->insert('hardware');
      return $query;
    }
    
     public function addsw(){
     $array=array('sw_name'=>$_POST['sw_name'],'sw_status'=>$_POST['sw_status'],'sw_description'=>$_POST['sw_description'],
                  'sw_productkey'=>$_POST['sw_productkey'],'sw_dateinstalled'=>$_POST['sw_dateinstalled']
                  ,'sw_expire'=>$_POST['sw_expire'],'sw_type'=>$_POST['sw_type'],'sw_comp_id'=>$_POST['sw_comp_id'] );
     $this->db->set($array);
     $query=$this->db->insert('software');
      return $query;
    }
    
}