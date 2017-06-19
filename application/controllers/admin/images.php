<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends Admin_Controller
{
	public function index()
	{
		$this->load->view('/index/index');
	}

    public function do_upload()
    {
        $config['upload_path']      =   FCPATH.'/public/images/uploads/';
        $config['allowed_types']    =   'gif|jpg|png';
        $config['max_size']         =   100;
        $config['max_width']        =   1024;
        $config['max_height']       =   768;
        $config['file_name']        =   date('YmdHis').mt_rand(100,999);

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('file'))
        {
            $result =   array('sta' => false, 'data' => $this->upload->display_errors());
        }
        else
        {
            $result =   array('sta' => true, 'data' => $this->upload->data());
        }

        echo json_encode($result);
    }
}
