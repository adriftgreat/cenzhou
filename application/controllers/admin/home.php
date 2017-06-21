<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('/index/index');
	}

    public function edit()
    {
        $column_id =   $this->input->get_post('c_id');

        if($column_id)
        {
            $this->load->model('images_model');
            $column_info=   $this->column_model->getColumnInfo($column_id);
            $image_list =   $this->images_model->getImageList($column_id, 1);
        }

        $view_data  =   array(
            'column'    =>  $column_info,
            'img_list'  =>  $image_list,
        );

        $this->load->view('/index/edit', $view_data);
    }

    public function save()
    {
        $c_id   =   $this->input->post('c_id');
        $title  =   $this->input->post('title');
        $sort   =   $this->input->post('sort');
        $img_ids=   $this->input->post('img_ids');

        $data   =   array(
            'title'     =>  $title,
            'sort'      =>  $sort
        );

        if($c_id > 0)
        {
            $sta    =   $this->column_model->updateColumn($c_id, $data);
        }
        else
        {
            $sta    =   $this->column_model->addColumn($data);
        }

        if($sta && $img_ids && !$c_id)
        {
            $this->load->model('images_model');

            $data   =   array(
                'type'  =>  1,
                'p_id'  =>  $sta
            );

            $sta    =   $this->images_model->updateImages(explode(',',$img_ids), $data);
        }

        echo json_encode(array('state' => $sta));
    }
}
