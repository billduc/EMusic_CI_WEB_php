<?php

/**
 * Created by dinhty.luu@gmail.com
 * Date: 24/05/2017
 * Time: 15:18
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once "BackendBase.php";

class Admin extends BackendBase
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('admin/index');
    }

    public function singerCreate()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');


        $this->load->helper('url');
        $this->load->model('Singer');

        $data['title'] = 'Create a news singer';

        $this->form_validation->set_rules('name', 'Name', 'required');

        $data = array();
        $data['content_view'] = 'admin/singer/create';
        $data['title'] = 'Singer/Create';

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/master_layout', $data);
        } else {
            $this->Singer->set_singer();
        }
    }
    public function listSinger()
    {
        $this->load->helper('url');
        $this->load->model('Singer');

        $data['listSinger'] =  $this->Singer->getList();
        $this->load->view('admin/singer/index');
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

}