<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class confirm extends CI_Controller {

	public function index(){
		$this->check();
 	}
	
 	function check(){
		$this->load->model("check");
		$newRow = $_POST;
		$this->load->helper('url');
		$data=$this->check->readlogin($newRow);

		if(!empty($data)){
        $_SESSION['username'] = $data[0]->id;
        redirect('main', 'location');
		}	

		else{
		redirect('login', 'location');
		
		}

		
	}

	

}

	
