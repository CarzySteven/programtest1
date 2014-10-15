<?php
class Account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('account_model');
        $this->load->library('table');
    }

    public function index()
    {
        $this->load->helper('form');
        
        $data['title'] = 'Account';
        $this->load->view('account/apply');
    }
    public function ok()
    {
        $this->load->view('account/success');
        $this->account_model->apply_account();
    }
} 
