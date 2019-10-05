<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function index(){
	   
		$this->load->model('session_model','sen');
		$this->sen->reduce_all_sen();
	    $this->load->helper('form');
	    $this->load->helper('url');
		$this->load->view('Login/Login_view');

	}

	public function welcome($id = ''){
		$this->load->view('welcome_message');
		echo "This is data base application ".$id;
	}
	
	public function check(){
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('username','User Name','required');
	    $this->form_validation->set_rules('pass', 'User Password', 'required');
	    
	    if($this->form_validation->run())
	    {
	    	$this->load->model('login_model','valid');
	        if(isset($_POST['submit'])){
	        	if( $data=$this->valid->isValidate($_POST['username'],$this->input->post('pass'))){
	        		//echo "<pre>";
	        		//print_r($data);
	        		$this->load->model('session_model','ses');
	        		$this->ses->set_sen_dte($data);
	        		return redirect('Welcome/');
	        	}
	        	else{
	        		$this->load->view('Login/Login_view');
	        		echo "<script> alert('Invalid user Name Password');</script>";
	        	}
	        }
	        
	        

	    }
	    else{
	        $this->load->view('Login/Login_view');
	    }
	}
}

?>