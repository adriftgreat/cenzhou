<?php
class Column_model extends CI_Model
{
    public $table_name  =   'columns';

    public function __construct()
    {
        parent::__construct();
    }

    public function getColumnList($p_id = 0)
    {
        if($p_id)
        {
            $this->db->where('p_id', $p_id);
        }

        $result =   $this->db->get($this->table_name)->result_array();

        return $result;
    }
}