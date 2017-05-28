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
        redirect('admin/singer');
    }
    public function listSinger()
    {
        $data = [];

        $data = $this->_forHeader($data);
        $this->load->model('Song_Model');

        $data['listSong'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [6, 0]]);
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), ['name', 'avatar']));
        $data['listSingerValue'] = $this->Singer_Model->get_list();

        $this->load->view('singer/list', $data);
    }
    public function listSong()
    {
        $id = $this->input->get('id', TRUE);

        if (!is_numeric($id)) {
            redirect(base_url(), 'refresh');
        }
        $data = [];

        $data = $this->_forHeader($data);
        $this->load->model('Song_Model');

        $data['listSong'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [6, 0]]);
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), ['name', 'avatar']));
        $data['listSongAlbum'] = $this->Song_Model->get_list(['where' => ['singer_id' => $id]]);
        $model = $this->Singer_Model->get_info($id);
        $data['model'] = $model;
        $data['title'] = 'Danh sách bài hát của ca sĩ '.$model->name;
//        $this->dd($data['listSongValue']);
        $this->load->view('song/list-song', $data);
    }
}