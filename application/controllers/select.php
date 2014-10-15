<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class select extends CI_Controller {

	public function init_pagination($uri,$total_rows,$per_page=10,$segment=4){
	       $ci                          =& get_instance();
	       $config['per_page']          = $per_page;
	       $config['uri_segment']       = $segment;
	       $config['base_url']          = base_url().$uri;
	       $config['total_rows']        = $total_rows;
	       $config['use_page_numbers']  = TRUE;
	 
	       $ci->pagination->initialize($config);
	       return $ci->pagination->create_links();    
   } 


	public function index(){
		// $this->insertValues();
		// echo "hello";
		$this->getvalues();
		// echo "hello getvalues";

 	}
	
	function getvalues(){

	$this->load->library('pagination');

	$config['base_url'] = 'http://localhost/ci/index.php/select/page/';
	$config['uri_segment'] = 3;
	// $config['use_page_numbers'] = TRUE;
	$config['total_rows'] = 200;
	$config['per_page'] = 20; 

	$this->pagination->initialize($config); 

	echo $this->pagination->create_links();
	exit;

	$this->load->library('pagination');
	$this->load->helper('url');
	$config['base_url'] = site_url('index.php/select');
	$config['uri_segment'] = 3; 
	echo $config['base_url'];
	echo "<BR>";
	// $config['total_rows'] = 400;
	// $config['per_page'] = 20; 


	// $config['uri_segment'] = 3;
	// $config['next_link'] = '下一页';             
	// $config['prev_link'] = '上一页';             
	// $config['last_link'] = '末页';
	// $config['first_link'] = '首页';

	// $config['num_links'] = 4;

	// $config['cur_page'] = $this->uri->segment(3); 

	// $tab['table']=$this->mpage->get_books($config ['per_page'], $this->uri->segment(3));


	// $this->pagination->initialize($config); 

	// $offset=$this->url->segment(3);

	// print_r($this->pagination->create_links());
	echo $this->init_pagination('index.php/select',300);
	// print_r($page->create_links());

	exit;
	// echo $this->init_pagination();
       // $ci                          =& get_instance();
       // $config['per_page']          = $per_page;
       // $config['uri_segment']       = $segment;
       // $config['base_url']          = base_url().$uri;
       // $config['total_rows']        = $total_rows;
       // $config['use_page_numbers']  = TRUE;
 
       // echo $ci->pagination->initialize($config);

		echo "<BR>";



		$this->load->model("message_db");
		if(empty($_GET['page']))
		$_GET['page'] = 1;
		$page = $_GET['page'];//目前頁數
		$per=20; //設定顯示資料量
		$start = ($page - 1) * $per; //select 開始頁數
		$page_data['dataAry']=$this->message_db->get($start,$per);
		$datatotal = $this->message_db->getTotal();
		//datatotal Object值 dataTotal 目前值
		$page_data['page']=$_GET['page'];
		$page_data['pages_row'] = $per; //設定顯示資料量
		$page_data['datatotal'] = $datatotal[0]->total; //資料庫總數
		// print_r($page_data['dataAry']);exit;
		$this->load->view("select_view",$page_data);

	}

	// insert data ->array
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

	function updataValues(){
		$this->load->model("message_db");
		$newRow = array(
		array("id"=>"3","name"=>"marcus"),
		array("id"=>"4","name"=>"bill")

			);
		$this->message_db->update2($newRow);
		echo "it has been updata";
	}

	function deleteValues(){
		$this->load->model("message_db");

		$oldRow =array("id"=>"19");

		$this->message_db->delete1($oldRow);
		echo "it has been delete";
	}

	function emtpyTable(){
		$this->load->model("message_db");
		$oldRow = "test";
		$this->message_db->empty1($oldRow);
		echo "emptied";
	}
}

	
