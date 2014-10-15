<?php

class check extends CI_Model{

	function readlogin($data){
	
		$query= $this->db->query("SELECT * FROM Personal_information 
		 	WHERE id='$data[id]' AND psw='$data[psw]' ");
		
		return $query->result();
	}


	function readitem($data){
		$query= $this->db->query("SELECT * FROM Personal_information");
		

		return $query->result();
	}


}