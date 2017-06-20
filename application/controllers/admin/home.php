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
        $column_id =   $this->input->get_post('art_id');

        if($column_id)
        {
            $article_info   =   $this->column_model->getArticleInfo($column_id);
        }

        $view_data  =   array(
            'article'   =>  $article_info,
        );

        $this->load->view('/article/edit', $view_data);
        $this->load->view('/index/edit');
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
            $sta    =   $this->column->updateColumn($c_id, $data);
        }
        else
        {
            $sta    =   $this->article_model->addColumn($data);
        }

        if($sta && $img_ids && !$c_id)
        {
            $this->load->model('images_model');

            $data   =   array(
                'type'  =>  1,
                'pid'   =>  $sta
            );

            $sta    =   $this->images_model->updateImages($img_ids, $data);
        }

        echo json_encode(array('state' => $sta));
    }
}
