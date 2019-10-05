<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class session_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		 $this->load->library('session');
	}

	public function get_sen_dte(){
        if(!$this->session->userdata('usr_id') || !$this->session->userdata('us_name') || !$this->session->userdata('us_email') || !$this->session->userdata('us_mobile') || !$this->session->userdata('us_typ')){
            
            return 0;
        }

        return $this->session->all_userdata();
    }


    public function set_sen_dte($data){
    				$this->session->set_userdata('usr_id',$data->id);
	        		$this->session->set_userdata('us_name',$data->Name);
	        		$this->session->set_userdata('us_email',$data->email);
	        		$this->session->set_userdata('us_mobile',$data->mobile);
	        		$this->session->set_userdata('us_typ',$data->type);
	        		$this->session->set_userdata('us_addre',$data->address);
	        		$this->session->set_userdata('us_dte_jin',$data->regstration_date);
	        		$this->session->set_userdata('us_tme_jin',$data->regstration_time);
	        		$this->session->set_userdata('us_img_url',$data->img_url);
    }


    public function reduce_all_sen(){
    	$this->session->sess_destroy();
    }
}
?>