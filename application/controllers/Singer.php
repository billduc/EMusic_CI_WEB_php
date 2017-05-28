<?php

/**
 * Created by dinhty.luu@gmail.com
 * Date: 27/05/2017
 * Time: 14:09
 */
class Singer extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Singer_Model');
    }

    public function create()
    {
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }
        $this->load->model('Singer_Model');
        $data['title'] = 'Create a news singer';

        $this->form_validation->set_rules('name', 'Name', 'required');

        $data = array();
        $data['content_view'] = 'admin/singer/create';

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/master_layout', $data);
        } else {
            $this->Singer_Model->set_singer();
            redirect('admin/singer');
        }
    }

    public function index()
    {
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }
        $data = [];
        $this->load->model('Singer_Model');
        $data['listSinger'] = $this->Singer_Model->get_list();
        $data['content_view'] = 'admin/singer/index';
        $data['title'] = 'Signer/List';
        $this->load->view('admin/master_layout', $data);
    }

    public function update()
    {
        $id = $this->input->get('id', TRUE);
        if (!is_numeric($id)) {
            redirect('admin_site/login/login', 'refresh');
        }
        $this->load->model('Singer_Model');
        $data['title'] = 'Create a news singer';

        $this->form_validation->set_rules('name', 'Name', 'required');

        $data = array();
        $data['content_view'] = 'admin/singer/update';

        if ($this->form_validation->run() === FALSE) {
            $data['singer'] = $this->Singer_Model->get_info($id);
            $this->load->view('admin/master_layout', $data);
        } else {
            $this->Singer_Model->set_singer($id);
            redirect('admin/singer');
        }

    }

    public function delete()
    {
        $id = $this->input->get('id', TRUE);

        if (!is_numeric($id)) {
            redirect('admin_site/login/login', 'refresh');
        }

        $this->Singer_Model->delete((int)$id);
        redirect('admin/listSinger');
    }
}