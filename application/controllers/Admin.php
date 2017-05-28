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
        $this->load->model('Singer_Model');
        $this->load->model('Artist_Model');
        $this->load->model('Song_Model');
        $this->load->model('Album_Model');
        $data['totalSinger'] = $this->Singer_Model->get_total();
        $data['totalArtist'] = $this->Artist_Model->get_total();
        $data['totalSong'] = $this->Song_Model->get_total();
        $data['totalAlbum'] = $this->Album_Model->get_total();
        $data['content_view'] = 'admin/index';
        $this->load->view('admin/master_layout', $data);

        //$this->load->view('user/register');
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