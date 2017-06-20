<?php
class Column_model extends CI_Model
{
    public $table_name  =   'columns';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取栏目列表
     * @param int $p_id
     * @return mixed
     */
    public function getColumnList($p_id = 0)
    {
        if($p_id)
        {
            $this->db->where('p_id', $p_id);
        }

        $this->db->where('status', 1);
        $result =   $this->db->get($this->table_name)->result_array();
        
        return $result;
    }

    /**
     * 获取栏目详情
     * @param $id
     * @return mixed
     */
    public function getColumnInfo($id)
    {
        $this->db->where('id', $id);

        $result =   $this->db->get($this->table_name)->row_array();

        return $result;
    }

    /**
     * 更新文章
     * @param $id
     * @param $data
     * @return mixed
     */
    public function updateColumn($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $sta =   $this->db->update($this->table_name);

        return $sta;
    }

    /**
     * 添加文章
     * @param $data
     * @return mixed
     */
    public function addColumn($data)
    {
        $sta    =   $this->db->insert($this->table_name, $data);

        return $sta;
    }
}