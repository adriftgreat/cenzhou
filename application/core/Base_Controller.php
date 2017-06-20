<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('column_model');
		$this->getColumn();
	}

	public function getColumn()
    {
        $result =   $this->column_model->getColumnList();
        $array  =   array();

        foreach($result as $key => $value)
        {
            $array[$value['p_id']][] =  $value;
        }

        $this->load->vars('c_list', $array);
    }

	public function __destruct()
	{

	}
}

class Home_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->header();
	}
	
    public function header()
    {
    	$this->load->view('/element/header');
    }

	public function footer()
	{
		echo $this->load->view('/element/footer', '', true);
	}

	public function __destruct()
	{
		$this->footer();
	}
}

