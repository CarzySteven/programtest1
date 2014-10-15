<?php

class Message_db extends CI_Model{
	function getAll(){
		$query= $this->db->query("SELECT * FROM message");
		return $query->result();
	}

	function getTotal(){
		//count Total data
		$query= $this->db->query("SELECT count(*) AS total FROM message");
		return $query->result();
	}	

	function get($start,$per){ 
	//get select 該頁 資料。
		$query= $this->db->query("SELECT * From message order by id limit 
			$start,$per");
		
		// $query= $this->db->query("SELECT * From message order by id > ({$page}-1)*{$per} limit {$per} ");
		//無法執行 不知道哪出問題？	
		// $query= $this->db->query("SELECT id FROM message where id > ({$page}-1)*{$per} limit {$per} ");
		// 原公式
		return $query->result();
	}	

	function insert1($data){
		$this->db->insert("message",$data);
	}

	function insert2($data){
		$dataAry[] = $data;
		$this->db->insert_batch("message",$dataAry);

	}
	function update1($data){
		$dataAry[] = $data;
		$this->db->update("message",$dataAry,"id");
	}
	function update2($data){
		// print_r($data);
		$dataAry[] = $data;
		$this->db->update_batch("message",$dataAry,"id");
	}
	function delete1($data){
		$this->db->delete("message",$data);
	}
	
	function empty1($table){
		$this->db->empty_table($table);
		// $this->db->empty_table('mytable'); 

	}


}