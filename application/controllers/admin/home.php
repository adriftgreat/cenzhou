<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('column_model');
    }

	public function index()
	{
	    $column_list    =   $this->column_model->getColumnList();
	    $view_data      =   array('list' => $column_list);

		$this->load->view('/index/index', $view_data);
	}


    public function edit()
    {
        $this->load->view('/index/edit');
    }
}
