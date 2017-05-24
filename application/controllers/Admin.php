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

        $config['upload_path'] = APPPATH . 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);


        $data['title'] = 'Create a news singer';

        $this->form_validation->set_rules('name', 'Name', 'required');
//        $this->upload->initialize($config);

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/singer/create');
        } else {
            $this->Singer->set_singer();
        }
    }

}