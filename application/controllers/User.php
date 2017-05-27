<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller
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
        $this->load->library('form_validation');
        $this->load->helper('form');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean|callback_check_email');
        $this->load->view('user/register');

        if($this->form_validation->run())
        {
            //du lieu them vao bang thanh vien
            $data = array(
                'username'     => $this->input->post('username'),
                'email'    => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'phone'    => $this->input->post('phone'),
                'fullname'     => $this->input->post('username'),
                'dob'     => '1/1/1',
                'is_admin' => '0'
            );
            print_r($data);
            //them thanh vien vao trong csdl
//            echo "<script type='text/javascript'> alert('ok'); </script>\n";
//            if($this->User_Model->create($data))
//            {
//                //$this->session->set_flashdata('flash_message', 'Dang ky thanh vien thanh cong');
//                //redirect();//chuyen toi trang chu
//                echo "<script type='text/javascript'> alert('ok'); </script>\n";
//            }
//            else{
//                echo "<script type='text/javascript'> alert('no ok'); </script>\n";
//            }
            //print_r($data);
        }

    }

    /*
     * Kiểm tra user đã tồn tại hay chưa
     */
    function check_email()
    {

        $name = $this->input->post('uerName');
        $where = array();
        $where['username'] = $name;
        //kiểm tra điều kiện user có tồn tại trong csdl hay không

        if($this->User_Model->check_exists($where))
        {
            //trả về thông báo lỗi nếu đã tồn tại user này
            $this->form_validation->set_message(__FUNCTION__, 'Tai Khoan da ton tai');
            return FALSE;
        }
        return TRUE;
    }

}
