<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class insert extends CI_Controller {

	public function index(){
		// $this->insertValues();
		// $this->go();
		// $this->go_select();

		echo "ok";exit;

 	}
	
 	function insertValues(){
		$this->load->model("message_db");
		$newRow = $_POST;
		$newRow['created_at'] = date("Y-m-d H:i:s");
		$newRow['msgtime'] = date("Y-m-d H:i:s");
		$newRow['sort'] = '0';
		$newRow['create'] = '0';
		$newRow['modify'] = '0';
		$newRow['updated_at'] = date("Y-m-d H:i:s");
		// print_r($_POST);
		// print_r($newRow);
		$this->message_db->insert2($newRow);
		
	}

	function go_select(){
		$this->load->helper('url');
		// $url = "localhost/ci/index.php/select";
		// $us = prep_url($url);
		// echo $us;

		redirect('/index.php/main', 'location');

	}

}

	
