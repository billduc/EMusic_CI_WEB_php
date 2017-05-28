<?php

/**
 * Created by dinhty.luu@gmail.com
 * Date: 27/05/2017
 * Time: 14:59
 */
class Artist extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artist_Model');
    }

    public function create()
    {
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }
        $this->load->model('Artist_Model');
        $data['title'] = 'Create a news Artist';

        $this->form_validation->set_rules('name', 'Name', 'required');

        $data = array();
        $data['content_view'] = 'admin/artist/create';

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/master_layout', $data);
        } else {
            $this->Artist_Model->set_data();
            redirect('admin/artist');
        }
    }

    public function index()
    {
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }
        $data = [];
        $this->load->model('Artist_Model');
        $data['listArtist'] = $this->Artist_Model->get_list();
        $data['content_view'] = 'admin/artist/index';
        $data['title'] = 'List Artist';
        $this->load->view('admin/master_layout', $data);
    }

    public function update()
    {
        $id = $this->input->get('id', TRUE);
        if (!is_numeric($id)) {
            redirect('admin_site/login/login', 'refresh');
        }
        $this->load->model('Artist_Model');
        $data['title'] = 'Create a news Artist';

        $this->form_validation->set_rules('name', 'Name', 'required');

        $data = array();
        $data['content_view'] = 'admin/artist/edit';

        if ($this->form_validation->run() === FALSE) {
            $data['artist'] = $this->Artist_Model->get_info($id);
            $this->load->view('admin/master_layout', $data);
        } else {
            $this->Artist_Model->set_data($id);
            redirect('admin/artist');
        }

    }

    public function delete()
    {
        $id = $this->input->get('id', TRUE);

        if (!is_numeric($id)) {
            redirect('admin_site/login/login', 'refresh');
        }

        $this->Artist_Model->delete((int)$id);
        redirect('admin/artist');
    }
}