<?php

/**
 * Created by dinhty.luu@gmail.com
 * Date: 24/05/2017
 * Time: 15:18
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
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

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/singer/create');
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

}