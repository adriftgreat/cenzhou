<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->header();
	}

	public function header()
	{
		$this->load->view('/admin/element/header');
	}

	public function footer()
	{
		echo $this->load->view('/admin/element/footer', '', true);
	}

	public function __destruct()
	{
		$this->footer();
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
    	$this->load->view('/www/element/header');
    }

	public function footer()
	{
		echo $this->load->view('/www/element/footer', '', true);
	}

	public function __destruct()
	{
		$this->footer();
	}
}

