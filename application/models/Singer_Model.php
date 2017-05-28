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


    public function set_singer($id = false)
    {

        $data = $this->input->post();
        if (isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])){
            $data['avatar'] = $this->uploadFile('avatar');
        }
        if ($id === false) {
            return $this->create($data);
        } else {
            return $this->update($id, $data);
        }
    }
}