<?php

/**
 * Created by PhpStorm.
 * User: nguyennghia
 * Date: 5/25/17
 * Time: 3:48 PM
 */
class BaseModel extends CI_Model
{
    private $table;

    public function __construct()
    {
        parent::__construct();
    }

    public function setTable($table)
    {
        $this->$table = $table;
    }

    public function set_data($data, $condition = [])
    {
        if(empty($condition)){
            return $this->db->insert($this->table, $data);
        }

        $this->db->where($condition);
        return $this->db->update($this->table, $data);

    }

    public function find_all($condition=[]){
        $this->db->where($condition);
        return $this->db->get($this->table)->result_array();
    }

    public function delete($condtion){
        $this->db->where($condtion);
        return $this->db->delete($this->table);
    }


}