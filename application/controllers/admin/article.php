<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller
{
	public function index()
	{
		$this->load->view('/admin/index/index');
	}
}
