<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Register extends CI_Controller {

     function __construct(){
         parent::__construct();
         $this->load->library('form_validation');
		 $this->load->driver("session");
		 $this->load->model('Login_model');
         $this->load->helper(array('form', 'url', 'captcha'));
	 }
	 
  public function index() {
    // loading captcha helper
       $this->load->helper('captcha');
	//validating form fields
	   $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
       $this->form_validation->set_rules('username', 'Username', 'trim|required');
       $this->form_validation->set_rules('password', 'Password', 'trim|required');
       $this->form_validation->set_rules('userCaptcha', 'Captcha', 'required|callback_check_captcha');
       $userCaptcha = $this->input->post('userCaptcha');
    if ($this->form_validation->run() == false){
      // numeric random number for captcha
      $random_number = substr(number_format(time() * rand(),0,'',''),0,6);
      // setting up captcha config
      $vals = array(
		'word' => $random_number,
		'img_path'    => './captcha/',
		'img_url'     => base_url().'captcha/',
		'font_path'   =>  BASEPATH.'fonts/texb.ttf',
		'img_width'   => 140,
		'img_height'  => 32,
		'word_length' => 5,
		'expiration'  => 7200
		);
      $data['captcha'] = create_captcha($vals);
      $this->session->set_userdata('captchaWord',$data['captcha']['word']);
      $this->load->view('captcha', $data);
	    }else{
		$where = array(
          "username"    => $this->input->post("username"),
          "password" => md5($this->input->post("password")));
            $respon = $this->Login_model->get($where);
            if($respon){
            $this->session->set_userdata("register",$respon);
            redirect('adminpanel');
	  }else{
		redirect('register');
	   }
    }
  }

public function check_captcha($str){
	 $word = $this->session->userdata('captchaWord');
	  if(strcmp(strtoupper($str),strtoupper($word)) == 0){
      return true;
    }
    else{
      $this->form_validation->set_message('check_captcha', 'Please enter correct words!');
      return false;
	}
}
	
}











