<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load model user
        $this->load->model('user_model');
    }

    /*
    * Phuong thuc dang ky thanh vien
    */
    public function register()
    {
        //load thu vien validation
        $this->load->library('form_validation');
        $this->load->helper('form');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean|callback_check_email');

        if($this->form_validation->run())
        {
            //du lieu them vao bang thanh vien
            $data = array(
                'name'     => $this->input->post('uerName'),
                'email'    => $this->input->post('mail'),
                'password' => md5($this->input->post('password')),
            );
            //them thanh vien vao trong csdl
            if($this->user_model->create($data))
            {
                $this->session->set_flashdata('flash_message', 'Dang ky thanh vien thanh cong');
                redirect();//chuyen toi trang chu
            }
        }


        $this->load->view('user/register');
    }

    /*
 * Kiểm tra email đã tồn tại hay chưa
 */
    function check_email()
    {

        $email = $this->input->post('email');
        $where = array();
        $where['email'] = $email;
        //kiểm tra điều kiện email có tồn tại trong csdl hay không
        if($this->user_model->check_exists($where))
        {
            //trả về thông báo lỗi nếu đã tồn tại email này
            $this->form_validation->set_message(__FUNCTION__, 'Email đã sử dụng');
            return FALSE;
        }
        return TRUE;
    }

}
