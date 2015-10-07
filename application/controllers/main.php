<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
   
	public function index()
	{
            $this->login();
	}
     public function calendar(){
            if ($this->session->userdata('is_logged_in')){
          
            $this->load->view('imports/header');
            $this->load->view('head');
            $this->load->view('calendar');
            } else {
                redirect('main/restricted');
            }
        }
        public function login(){
	if ($this->session->userdata('is_logged_in')){
            redirect('main/home');
            } else {
            $this->load->view('imports/header');
            $this->load->view('login');
			}
        }
        
        public function assets(){
            if ($this->session->userdata('is_logged_in')){
          
            $this->load->view('imports/header');
            $this->load->view('head');
            $this->load->view('assets');
            } else {
                redirect('main/restricted');
            }
        }
        
        public function home(){
            if ($this->session->userdata('is_logged_in')){
            $this->load->view('imports/header');
            $this->load->view('head');
            $this->load->view('home');
            } else {
                redirect('main/restricted');
            }
        }
        
        /* display assets */
        public function getcomp(){
            $this->load->model('asset_model');
            $this->data['comps'] = $this->asset_model->get_all();
            $this->load->view('getcomp',$this->data); 
        }
        
        public function gethw(){
            $this->load->model('asset_model');
            $this->data['hwares'] = $this->asset_model->get_allhw();
            $this->load->view('gethware',$this->data); 
        }
        
        public function getsw(){
            $this->load->model('asset_model');
            $this->data['swares'] = $this->asset_model->get_allsw();
            $this->load->view('getsware',$this->data); 
        }
        
        public function popdropdown(){
            $this->load->model('asset_model');
            $data=$this->asset_model->get_all();
             $this->output->set_output(json_encode($data));
            
        }
        
        /* add assets */
        public function addcomp(){
            $this->load->library('form_validation');
            $this->load->helper('security');
           $this->form_validation->set_rules('comp_num','Computer Number','trim|required|numeric|callback_pc_exist');
           $this->form_validation->set_rules('status','Status','trim|required');
           $this->form_validation->set_rules('location','Location','trim|required');
    
           if($this->form_validation->run()){
             
               $this->load->model('asset_model');
              $result=$this->asset_model->addpc();
             
               if(!$result){
                   echo mysqli_error($result);
               }else{
                   echo "<div class='ui success message'>Computer Successfully Added!</div>";
               }
           }
            echo validation_errors("<div class='ui error message'>","</div>");
        }
        
        public function addhardware(){
            $this->load->library('form_validation');
            $this->load->helper('security');
           $this->form_validation->set_rules('hw_name','Hardware Name','trim|required|min_length[8]');
           $this->form_validation->set_rules('hw_status','Status','trim|required');
           $this->form_validation->set_rules('hw_description','Hardware Description','trim|required|min_length[8]');
           $this->form_validation->set_rules('hw_serialno','Serial Number','trim|required|min_length[5]|callback_hw_exist');
           $this->form_validation->set_rules('hw_dateinstalled','Date Installed','trim|required');
           $this->form_validation->set_rules('hw_comp_id','Computer','trim|required');
           if($this->form_validation->run()){
             
               $this->load->model('asset_model');
              $result=$this->asset_model->addhw();
             
               if(!$result){
                   echo mysqli_error($result);
               }else{
                   echo "<div class='ui success message'>Computer Successfully Added!</div>";
               }
           }
            echo validation_errors("<div class='ui error message'>","</div>");
        }
        
         public function addsoftware(){
            $this->load->library('form_validation');
            $this->load->helper('security');
           $this->form_validation->set_rules('sw_name','Software Name','trim|required|min_length[8]');
           $this->form_validation->set_rules('sw_status','Status','trim|required');
           $this->form_validation->set_rules('sw_description','Software Description','trim|required|min_length[8]');
          $this->form_validation->set_rules('sw_type','Software Type','trim|required');
           if ($_POST["sw_type"]==1) {
           $this->form_validation->set_rules('sw_productkey','Product Key','trim|required|min_length[5]|callback_sw_exist');
           $this->form_validation->set_rules('sw_expire','Expiration Date','trim|required');
           }
           $this->form_validation->set_rules('sw_dateinstalled','Date Installed','trim|required');
           $this->form_validation->set_rules('sw_comp_id','Computer','trim|required');
           if($this->form_validation->run()){
             
               $this->load->model('asset_model');
              $result=$this->asset_model->addsw();
             
               if(!$result){
                   echo mysqli_error($result);
               }else{
                   echo "<div class='ui success message'>Computer Successfully Added!</div>";
               }
           }
            echo validation_errors("<div class='ui error message'>","</div>");
        }
       /*edit assets */
        
        
        
      /* asset exists */  
        public function pc_exist(){
             $this->load->model('asset_model');
            if ($this->asset_model->pc_exists()){
                return true;
            } else {
                 $this->form_validation->set_message('pc_exist','Computer Already Existed');
                 return false;
            }
            
        }
        
        public function hw_exist(){
             $this->load->model('asset_model');
            if ($this->asset_model->hw_exists()){
                return true;
            } else {
                 $this->form_validation->set_message('hw_exist','Hardware Already Existed');
                 return false;
            }
            
        }
        
        public function sw_exist(){
             $this->load->model('asset_model');
            if ($this->asset_model->sw_exists()){
                return true;
            } else {
                 $this->form_validation->set_message('sw_exist','Software Already Existed');
                 return false;
            }
            
        }
        /* validations and restriction */
        
        public function restricted(){
            $this->load->view('restricted');
        }
        
        public function login_validation(){
            $this->load->library('form_validation');
            $this->load->helper('security');
            $this->form_validation->set_rules('email','Email','required|min_length[8]|valid_email|trim|xss_clean|'
                    . 'callback_validate_credentials');
            $this->form_validation->set_rules('password','Password','required|md5|trim');
        
            if($this->form_validation->run()){
           
                $user=$this->model_users->get_user_info();
                if(!empty($user)){
                      foreach($user as $userinfo){
                            $data = array(
                                'empID' => $userinfo->empID,
                                'email' => $userinfo->email,
                                'emp_name' => $userinfo->emp_name,
                                'address' => $userinfo->address,
                                'position' => $userinfo->position,
                                'usertype' => $userinfo->usertype,
                                'is_logged_in' => 1
                            );
                }
                    $this->session->set_userdata($data);
                    redirect('main/home');
                }
               
            } else{
                $this->login();
            }
            
        }
        
        public function validate_credentials(){
            $this->load->model('model_users');
            if ($this->model_users->can_log_in()){
                return true;
            } else {
                $this->form_validation->set_message('validate_credentials','Incorrect'
                        . ' email/password');
                return false;
            }
        }
        public function logout(){
            $this->session->sess_destroy();
            redirect('main/login');
        }
}
