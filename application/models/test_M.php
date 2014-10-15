<?php

class test_M extends CI_Model{
	public function select(){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM sign');

		print_r($query);
		foreach ($query->result() as $row){
			echo $row->id;
			echo $row->psw;
			
		}


	}


	

}