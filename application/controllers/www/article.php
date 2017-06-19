<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends Home_Controller
{
	public function index()
	{
	    $this->load->view('/article/index');
	}
}
