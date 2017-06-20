<?php
class Images_model extends CI_Model
{
    public $table_name  =   'images';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取图片列表
     * @param $pid
     * @param $type
     * @return mixed
     */
    public function getImageList($pid, $type)
    {
        $this->db->where('pid', $pid);
        $this->db->where('type', $type);
        $result =   $this->db->get($this->table_name)->row_array();

        return $result;
    }

    /**
     * 获取图片信息
     * @param $id
     * @return mixed
     */
    public function getImageInfo($id)
    {
        $this->db->where('id', $id);
        $result =   $this->db->get($this->table_name)->row_array();

        return $result;
    }

    /**
     * 更新图片
     * @param $id
     * @param $data
     * @return mixed
     */
    public function updateImages($id, $data)
    {
        if(is_array($id))
        {
            $this->db->where_in('id', $id);
        }
        else
        {
            $this->db->where('id', $id);
        }
        $this->db->set($data);
        $sta =   $this->db->update($this->table_name);

        return $sta;
    }

    /**
     * 添加图片
     * @param $data
     * @return mixed
     */
    public function addImages($data)
    {
        $sta    =    $this->db->insert($this->table_name, $data);

        if($sta)
        {
            $sta    =   $this->db->insert_id();
        }
        
        return $sta;
    }

    /**
     * 删除图片
     * @param $id
     * @return mixed
     */
    public function delImages($id)
    {
        $sta    =    $this->db->delete($this->table_name, array('id' => $id));

        return $sta;
    }
}