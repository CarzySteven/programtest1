<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class checkitem extends CI_Controller {

	public function index(){
		$this->check();

 	}
	
 	function check(){
 		$this->load->helper('url');
		$this->load->model("check");
		$newRow = $_POST;
		$data=$this->check->readitem($newRow);
		
		if($data[0]->id == $newRow['id'] || 
		   $data[0]->username == $newRow['username'] ||
		   $data[0]->email == $newRow['email']){
		redirect('register', 'location');	
		}
		else
		redirect('registerdata', 'location');


			
	}

}

	
