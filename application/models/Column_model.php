<?php
class Article_model extends CI_Model
{
    public $table_name  =   'column';

    public function __construct()
    {
        parent::__construct();
    }

    public function getColumnList($p_id = 0)
    {
        $this->db->where('p_id', $p_id);

        $result =   $this->db->get($this->table_name)->result_array();

        return $result;
    }
}