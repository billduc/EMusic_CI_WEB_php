<?php

/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 27/05/2017
 * Time: 14:54
 */
class Create_user extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load model user
        $this->load->model('User_Model');

    }

    /*
    * Phuong thuc dang ky thanh vien
    */
    public function register()
    {
        //load thu vien validation

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Mat Khau', 'required');
        $this->form_validation->set_rules('username', 'Ten Dang Nhap', 'callback_check_user');

        if($this->form_validation->run())
        {
            //du lieu them vao bang thanh vien
            $data = array(
                'username'     => $this->input->post('name'),
                'email'    => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
//                'phone'    => $this->input->post('phone'),
//                'fullname'     => $this->input->post('username'),
            );
//            print_r($data);
//            die();
            //them thanh vien vao trong csdl
            if( $this->User_Model->create($data) )
            {
                $this->session->set_flashdata('flash_message', 'Dang ky thanh vien thanh cong');
                redirect(base_url(), 'refresh');//chuyen toi trang chu
                echo 'thanh cong';
                die();
            }
            else{
                echo 'that bai';
                die();
            }
            //print_r($data);
        }
        $this->load->view('user/register');

    }

    /*
     * Kiểm tra user đã tồn tại hay chưa
     */
    function check_user()
    {

        $name = $this->input->post('name');
        $where = array();
        $where['username'] = $name;
        //kiểm tra điều kiện user có tồn tại trong csdl hay không
//        echo 'name: '.$name;
//        die();

        if($this->User_Model->check_exists($where))
        {
            //trả về thông báo lỗi nếu đã tồn tại user này
            $this->form_validation->set_message(__FUNCTION__, 'Tai Khoan da ton tai');
            return FALSE;
        }
        return TRUE;
    }

}