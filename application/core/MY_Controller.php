<?php

/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 5/25/17
 * Time: 3:42 PM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
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

        switch ($controller) {
            //Nếu đang truy cập vào trang Admin
            case 'admin': {
                //load các file sử dụng nhiều cho trang admin
                //kiểm tra admin đăng nhập hay chưa
                //kiểm tra quyền của admin
                //....
                break;
            }

            //Trang chủ
            default: {
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
        if (!$user_data) {
            return false;
        }
        return true;
    }
    public function currentUser($key = 'user'){
        $user_data = $this->session->userdata($key);
        //neu chua login
        if (!$user_data) {
            return false;
        }
        return $user_data;
    }

    public function array_make($key, $data, $value)
    {
        $arr = [];
        foreach ($data as $d) {
            if (is_array($value)) {
                $temp = [];
                foreach ($value as $v) {
                    $temp[] = $d->{$v};
                }
                $arr[$d->{$key}] = $temp;
            }else{
                $arr[$d->{$key}] = $d->{$value};
            }
        }
        return $arr;
    }

    public function array_make_with_condition($key, $data, $keyShiff, $valueShiff)
    {
        $arr = [];
        foreach ($data as $d) {
            if ($d->{$keyShiff} == $valueShiff) {
                $arr[$d->{$key}] = $d;
            }
        }
        return $arr;
    }
    function dd($var) {
        $backtrace = debug_backtrace();
        $fileinfo = null;
        if (!empty($backtrace[0]) && is_array($backtrace[0])) {
            $fileinfo = $backtrace[0]['file'] . ":" . $backtrace[0]['line'];
        }
        echo "Debug at: $fileinfo</br>";
        var_dump($var);
        die;
    }
    public function _forHeader($data)
    {
        $this->load->model('SongType_Model');
        $this->load->model('GroupType_Model');
        $data['listGroup'] = $this->array_make('id', $this->GroupType_Model->get_list(['order' => ['id', 'ASC']]), 'Name');
        $data['listSongTypeHeader'] = $this->SongType_Model->get_list(['order' => ['id', 'ASC']]);
        return $data;
    }
}
