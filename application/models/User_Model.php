<?php

/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 26/05/2017
 * Time: 03:27
 */
class User_Model extends MY_Model
{
    public $table = 'user';

    public function check_login($username, $password)
    {
        //them dieu kien kiem tra email va password
        $where = array('username' => $username, 'password' => $password);
        $this->db->where($where);
        //thuc hien cau truy van
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0)
        {
            return true;
        }
        return false;
    }

    /*
     * lay thong tin thanh vien
     */
    public function get_user_info($where = array())
    {
        //tao dieu kien cho cau truy van
        $this->db->where($where);
        $result = $this->db->get('user');
        return $result->row();
    }
}