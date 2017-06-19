<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('article_model');
    }

    public function index()
	{
	    $article_list   =   $this->article_model->getArticleList();

	    $view_data  =   array(
	        'list' => $article_list
        );

		$this->load->view('/article/index', $view_data);
	}

	public function edit()
    {
        $article_id =   $this->input->get_post('art_id');

        if($article_id)
        {
            $article_info   =   $this->article_model->getArticleInfo($article_id);
        }

        $view_data  =   array(
            'article'   =>  $article_info,
        );

        $this->load->view('/article/edit', $view_data);
    }

    public function save()
    {
        $art_id =   $this->input->post('art_id');
        $title  =   $this->input->post('title');
        $sort   =   $this->input->post('sort');
        $content=   $this->input->post('content', false);

        $data   =   array(
            'title'     =>  $title,
            'content'   =>  $content,
            'sort'      =>  $sort
        );

        if($art_id > 0)
        {
            $sta    =   $this->article_model->updateArticle($art_id, $data);
        }
        else
        {
            $sta    =   $this->article_model->addArticle($data);
        }

        echo $sta;
    }

    public function del()
    {
        $article_id =   $this->input->post('art_id');

        if(!$article_id)
        {
            return false;
        }
        
        $this->article_model->deleteArticle($article_id, array('status' => 0));
    }
}
