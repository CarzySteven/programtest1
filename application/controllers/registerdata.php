<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registerdata extends CI_Controller {

	public function index(){
		$this->insertValues();
 	}
	
 	function insertValues(){
		$this->load->model("message_db");
		$this->load->helper('url');

		$newRow = $_POST;
		print_r($newRow);
		exit();
		$newRow['birth'] = date("Y-m-d H:i:s");
		$this->message_db->insertregister($newRow);
		redirect('login', 'location');

	}

	
}

	
