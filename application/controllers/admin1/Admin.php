<?php

/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 27/05/2017
 * Time: 04:42
 */

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('admin_model');
    }

    public function check_login()
    {
        //lay du lieu tu form
        $username    = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);
        $where = array('username' => $username, 'password' => $password);
        if(!$this->admin_model->check_exists($where))
        {
            //trả về thông báo lỗi nếu đã tồn tại email này
            $this->form_validation->set_message(__FUNCTION__, 'Đăng nhập không thành công');
            return FALSE;
        }
        return true;
    }

    /*
    * Phuong thuc dang nhap
    */
    public function login()
    {
        //load thu vien validation
        $this->load->library('form_validation');
        $this->load->helper('form');

        //tao cac tap luat
//        $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required|xss_clean');
//        $this->form_validation->set_rules('password', 'Mật khẩu', 'required|xss_clean');
//        $this->form_validation->set_rules('login', 'Đăng nhập', 'callback_check_login');

        if($this->form_validation->run())
        {
            //lay du lieu tu form post sang
            $username    = $this->input->post('username');
            $password = $this->input->post('password');
            $password = md5($password);
            $where = array('username' => $username, 'password' => $password);
            //lay thong tin thanh vien
            $user = $this->admin_model->get_info_rule($where);

            //luu thong tin thanh vien vao session
            $this->session->set_userdata('login', $user);
            //tạo thông báo
            $this->session->set_flashdata('flash_message', 'Đăng nhập thành công');
            redirect();//chuyen toi trang chu
        }

        //gui du lieu sang view
        $this->data['temp'] = 'admin/admin/login';
        $this->load->view('admin/login/index', $this->data);
    }

    public function create(){
        $this->load->model('admin_model');
        $data = array();
        $data['username'] = 'admin1';
        $data['password'] = 'admin1';

        if ($this->admin_model->create($data)){
            echo 'them thanh cong';
        }
        else{
            echo 'them that bai';
        }

    }

    public function update(){
        $id = 1;
        $data = array();
        $data['username'] = 'duc';
        $data['password'] = 'abcd';
        if ($this->admin_model->update($id,$data)){
            echo 'cap nhat thanh cong';
        }else{
            echo 'that bai';
        }
    }

    public function delete(){
        $id = 2;
        if ($this->admin_model->delete($id)){
            echo 'xoa thanh cong';
        }
        else{
            echo 'xoa that bai';
        }
    }

    public function get_info(){
        $id = 1;
        $info = $this->admin_model->get_info($id,'username');
        echo '<pre>';
        print_r($info);
    }
}