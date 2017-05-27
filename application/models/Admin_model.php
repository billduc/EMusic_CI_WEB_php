<?php

/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 27/05/2017
 * Time: 04:49
 */
class Admin_model extends MY_Model
{
    var $table = 'admin';

    //ten bang du lieu
    public function check_login($username, $password)
    {
        //them dieu kien kiem tra email va password
        $where = array('email' => $username, 'password' => $password);
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
        $result = $this->db->get('admin');
        return $result->row();
    }
}