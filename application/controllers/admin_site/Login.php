<?php

/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 26/05/2017
 * Time: 16:52
 */
class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load model user
        $this->load->model('admin_model');
    }

    /*
    * Kiem tra dang nhap
    */
    public function check_login()
    {

        //lay du lieu tu form
        $username    = $this->input->post('username');
        $password = $this->input->post('password');

//        echo $username.$password;
//        die();
        //$password = md5($password);
        $password = ($password);
        $where = array('username' => $username, 'password' => $password);
        if(!$this->admin_model->check_exists($where))
        {
            //trả về thông báo lỗi nếu đã tồn tại email này
//            echo "ahii";
//            die();
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
        if ($this->user_is_login('admin')){
            redirect('admin/index', 'refresh');
        }
        //tao cac tap luat
        $this->form_validation->set_rules('username', 'Ten dang nhap', 'required');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
        $this->form_validation->set_rules('submit', 'Đăng nhập', 'callback_check_login');

        if($this->form_validation->run())
        {
            //lay du lieu tu form post sang
            $username    = $this->input->post('username');
            $password = $this->input->post('password');
            //$password = md5($password);

            $where = array('username' => $username, 'password' => $password);
//            //lay thong tin thanh vien
            $user = $this->admin_model->get_info_rule($where);

//            luu thong tin thanh vien vao session
            $this->session->set_userdata('admin', $user);
//            tạo thông báo
            $this->session->set_flashdata('flash_message', 'Đăng nhập thành công');
            redirect('admin/index', 'refresh');//chuyen toi trang chu

        }

        //gui du lieu sang view
        $this->data['temp'] = 'admin/login/index';
        $this->load->view('admin/login/index', $this->data);
    }

}