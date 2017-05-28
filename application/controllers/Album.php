<?php

/**
 * Created by PhpStorm.
 * User: nguyennghia
 * Date: 5/25/17
 * Time: 3:41 PM
 */
class Album extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Album_Model');
    }

    public function create()
    {
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }
        $this->load->model('Album_Model');
        $data['title'] = 'Create a news Album';

        $this->form_validation->set_rules('name', 'Name', 'required');

        $data = array();
        $data['content_view'] = 'admin/album/create';

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/master_layout', $data);
        } else {
            $this->Album_Model->set_data();
            redirect('admin/album');
        }
    }

    public function index()
    {
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }
        $data = [];
        $this->load->model('Album_Model');
        $data['listAlbum'] = $this->Album_Model->get_list();
        $data['content_view'] = 'admin/album/index';
        $data['title'] = 'List Album';
        $this->load->view('admin/master_layout', $data);
    }

    public function update()
    {
        $id = $this->input->get('id', TRUE);
        if (!is_numeric($id)) {
            redirect('admin_site/login/login', 'refresh');
        }
        $this->load->model('Album_Model');
        $data['title'] = 'Create a news Album';

        $this->form_validation->set_rules('name', 'Name', 'required');

        $data = array();
        $data['content_view'] = 'admin/album/update';

        if ($this->form_validation->run() === FALSE) {
            $data['album'] = $this->Album_Model->get_info($id);
            $this->load->view('admin/master_layout', $data);
        } else {
            $this->Album_Model->set_data($id);
            redirect('admin/album');
        }

    }

    public function delete()
    {
        $id = $this->input->get('id', TRUE);

        if (!is_numeric($id)) {
            redirect('admin_site/login/login', 'refresh');
        }

        $this->Album_Model->delete((int)$id);
        redirect('admin/album');
    }
}