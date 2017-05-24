<?php

/**
 * Created by dinhty.luu@gmail.com
 * Date: 24/05/2017
 * Time: 17:15
 */
class Singer extends CI_Model
{
    protected $_table = 'singer';

    public function __construct()
    {
        parent::__construct();
    }

    public function getList()
    {
        $this->db->select('*');
        return $this->db->get($this->_table)->result_array();
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
        $config['upload_path'] = APPPATH . 'uploads/singer/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('avatar')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $this->upload->file_name = uniqid() . $this->upload->file_ext;
            $this->upload->data();
            $data['avatar'] = '/uploads/singer/' . $this->upload->file_name;
        }

        if ($id === false) {
            return $this->db->insert($this->_table, $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update($this->_table, $data);
        }
    }
}