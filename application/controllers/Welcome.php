<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __consturct(){
		parent::__consturct();
		
		echo "i am invokes";	
	}


	public function index()
	{	$this->load->model('session_model');
		$data['session_datas'] = $this->session_model->get_sen_dte();
		if(!$data['session_datas']){
			return redirect('Login/');
		}
		//echo '<pre>';
		//print_r($data);
		$this->load->view('Dash/dashboard',$data);
	}


	public function data()
	{
		$this->load->model('session_model');
		$data['session_datas'] = $this->session_model->get_sen_dte();
		if(!$data['session_datas']){
			return redirect('Login/');
		}

		$this->load->view('Dash/data',$data);

	}



	public function profile()
	{
		$this->load->model('session_model');
		$data['session_datas'] = $this->session_model->get_sen_dte();
		if(!$data['session_datas']){
			return redirect('Login/');
		}

		$this->load->view('Dash/profile',$data);
	}
}
