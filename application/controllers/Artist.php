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
    public function listArtist()
    {
        $data = [];

        $data = $this->_forHeader($data);
        $this->load->model('Song_Model');
        $this->load->model('Singer_Model');

        $data['listSong'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [6, 0]]);
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), ['name', 'avatar']));
        $data['listSingerValue'] = $this->Artist_Model->get_list();

        $this->load->view('artist/list', $data);
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
        $this->load->model('Singer_Model');

        $data['listSong'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [6, 0]]);
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), ['name', 'avatar']));
        $data['listSongAlbum'] = $this->Song_Model->get_list(['where' => ['artist_id' => $id]]);
        $model = $this->Artist_Model->get_info($id);
        $data['model'] = $model;
        $data['title'] = 'Danh sách bài hát của nhạc sĩ '.$model->name;
//        $this->dd($data['listSongValue']);
        $this->load->view('song/list-song', $data);
    }

}