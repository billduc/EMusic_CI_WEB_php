<?php

/**
 * Created by dinhty.luu@gmail.com
 * Date: 24/05/2017
 * Time: 15:18
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->user_is_login('admin')){
            redirect('admin_site/login/login', 'refresh');
        }
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('admin/index');

        //$this->load->view('user/register');
    }

    public function singerCreate()
    {
        $this->load->model('Singer_Model');
        $data['title'] = 'Create a news singer';

        $this->form_validation->set_rules('name', 'Name', 'required');

        $data = array();
        $data['content_view'] = 'admin/singer/create';

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/master_layout', $data);
        } else {
            $this->Singer_Model->set_singer();
            redirect('admin/listSinger');
        }
    }
    public function listSinger()
    {
        $data = [];
        $this->load->model('Singer_Model');
        $data['listSinger'] = $this->Singer_Model->get_list();
        $data['content_view'] = 'admin/singer/index';
        $data['title'] = 'Signer/List';
//        var_dump(json_encode($data['listSinger']));
//        die();
        $this->load->view('admin/master_layout', $data);
    }

    public function albumCreate()
    {
        $data = array();
        $data['content_view'] = 'admin/album/create';
        $data['title'] = 'Album/Create';
        $this->load->view('admin/master_layout', $data);

    }

    public function artistCreate()
    {

    }

    public function songCreate()
    {

    }
    public function logout()
    {
        if($this->user_is_login('admin'))
        {
            //neu thanh vien da dang nhap thi xoa session login
            $this->session->unset_userdata('admin');
        }
        $this->session->set_flashdata('flash_message', 'Đăng xuất thành công');
        redirect('admin_site/login/login');
    }

}