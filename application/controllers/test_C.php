<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test_C extends CI_Controller {

	public function index(){	
		echo "ok";
		$this->load->model("test_M");
	}
}

