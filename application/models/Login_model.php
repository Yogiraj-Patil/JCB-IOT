<?php
Class login_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
       
	}


    public function isValidate($username="",$password=""){
    	
    	$q = $this->db->where(['email'=>$username,'password'=>$password])
    					->get('users');

    	return $q->row();				

    	 /*if($q->num_rows()){
    	 	return $q->row();
    	 }else{
    	 	return 0;
    	 }*/

        //return ['name'=>$username, 'pass' => $password];
    }


    
}

?>