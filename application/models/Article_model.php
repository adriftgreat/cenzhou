<?php
class Article_model extends CI_Model
{
    public $table_name  =   'article';

    public function __construct()
    {
        $this->table_name =   'article';
        parent::__construct();
    }

    /**
     * 获取文章详细信息
     * @param $article_id
     * @return mixed
     */
    public function getArticleInfo($article_id)
    {
        $this->db->where('id', $article_id);
        $result =   $this->db->get($this->table_name)->row_array();

        return $result;
    }

    /**
     * 获取文章列表
     * @param $column_id    栏目id
     * @param int $limit
     * @param int $offset
     * @return mixed
     */
    public function getArticleList($column_id, $limit = 10, $offset = 0)
    {
        $this->db->where('column_id', $column_id);
        $this->db->limit($limit, $offset);
        $result =   $this->db->get($this->table_name)->result_array();

        return $result;
    }
}