<?php

/**
 * Created by dinhty.luu@gmail.com
 * Date: 24/05/2017
 * Time: 17:15
 */
class Singer_Model extends MY_Model
{
    public $table = 'singer';

    public function __construct()
    {
        parent::__construct();
    }


    public function countAll()
    {
        return $this->db->count_all($this->_table);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table);
    }

    public function set_singer($id = false)
    {

        $data = $this->input->post();
        $data['avatar'] = $this->uploadImage('avatar');
        if ($id === false) {
            return $this->create($data);
        } else {
            return $this->update($id, $data);
        }
    }
}