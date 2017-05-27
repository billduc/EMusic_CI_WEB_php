<?php

/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 5/25/17
 * Time: 3:42 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    // Bien luu thong tin gui den view
    var $data = array();

    /**
     * Ham khoi dong
     */
    function __construct()
    {
        //kế thừa từ CI_Controller
        parent::__construct();

        // Xu ly controller
        $controller = $this->uri->segment(1);
        $controller = strtolower($controller);

        switch ($controller)
        {
            //Nếu đang truy cập vào trang Admin
            case 'admin':
            {
                //load các file sử dụng nhiều cho trang admin
                //kiểm tra admin đăng nhập hay chưa
                //kiểm tra quyền của admin
                //....
                break;
            }

            //Trang chủ
            default:
            {
                //load các file sử dụng nhiều cho trang chủ
                //Xử lý ngôn ngữ
                //Xử lý tiền tệ
                //....
                break;
            }
        }

    }
    public function user_is_login($key = 'login')
    {
        $user_data = $this->session->userdata($key);
        //neu chua login
        if(!$user_data)
        {
            return false;
        }
        return true;
    }
}
