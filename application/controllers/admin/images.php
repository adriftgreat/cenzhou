<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('images_model');
    }

	public function index()
	{
		$this->load->view('/index/index');
	}

    public function do_upload()
    {
        $config['upload_path']      =   FCPATH.'/public/images/uploads/';
        $config['allowed_types']    =   'gif|jpg|png';
        $config['max_size']         =   0;
        $config['max_width']        =   3000;
        $config['max_height']       =   3000;
        $config['file_name']        =   date('YmdHis').mt_rand(100,999);

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('file'))
        {
            $result =   array('state' => false, 'data' => $this->upload->display_errors());
        }
        else
        {
            $result =   $this->upload->data();

            $data   =   array(
                'img_url'   =>  '/public/images/uploads/'.$result['file_name']
            );

            $insert_id  =   $this->images_model->addImages($data);
            $result     =   array('state' => true, 'img_id' => $insert_id);
        }

        echo json_encode($result);
    }

    public function del()
    {
        $image_id   =   $this->input->get_post('i_id');

        $image_info =   $this->images_model->getImageInfo($image_id);

        $this->images_model->delImages($image_id);
        unlink($image_info['img_url']);
    }
}
