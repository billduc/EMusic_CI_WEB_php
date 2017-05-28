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

        $this->load->model('Singer_Model');
        $this->load->model('Song_Model');
        $this->load->model('Artist_Model');
        $this->load->model('SongType_Model');
        $this->load->model('SongList_Model');
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

    public function song()
    {
        $id = $this->input->get('id', TRUE);

        if (!is_numeric($id)) {
            redirect('admin_site/login/login', 'refresh');
        }
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }
        $data = [];
        $album = $this->Album_Model->get_info($id);
        if (!$album) {
            redirect('admin_site/login/login', 'refresh');
        }
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), 'name'));
        $data['listArtist'] = ($this->array_make('id', $this->Artist_Model->get_list(), 'name'));
        $data['listSongType'] = ($this->array_make('id', $this->SongType_Model->get_list(), 'name'));
        $data['listSongList'] = ($this->array_make_with_condition('id', $this->SongList_Model->get_list(), 'album_id', $id));
        $data['listSong'] = $this->Song_Model->get_list();
        $data['content_view'] = 'admin/album/list-song';
        $data['title'] = 'Song List Album ' . $album->name;
        $data['idAlbum'] = $id;
        $this->load->view('admin/master_layout', $data);
    }

    public function songAdd()
    {
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }
        $params = $this->input->get();
        if ($this->SongList_Model->set_data($params)) {
            redirect('album/song?id=' . $params['album_id']);
        } else {
            redirect('admin/album');
        }
    }

    public function songRemove()
    {
        $params = $this->input->get();
        $id = isset($params['idSongList']) ? $params['idSongList'] : null;

        if (!is_numeric($id)) {
            redirect('admin_site/login/login', 'refresh');
        }
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }

        if ($this->SongList_Model->delete((int)$id)) {
            redirect('album/song?id=' . $params['albumId']);
        } else {
            redirect('admin/album');
        }

    }
    public function listAlbum()
    {
        $data = [];

        $data = $this->_forHeader($data);


        $data['listSong'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [6, 0]]);
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), ['name', 'avatar']));
        $data['listAlbum'] = $this->Album_Model->get_list();
        $this->load->view('album/list', $data);
    }
    public function listSong()
    {
        $id = $this->input->get('id', TRUE);

        if (!is_numeric($id)) {
            redirect(base_url(), 'refresh');
        }
        $data = [];

        $data = $this->_forHeader($data);


        $data['listSong'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [6, 0]]);
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), ['name', 'avatar']));
        $songListAlbum = $this->array_make('id', $this->SongList_Model->get_list(['where' => ['album_id' => $id]]), 'song_id');
        $songListAlbum = array_values($songListAlbum);
        $data['listSongAlbum'] = $this->Song_Model->get_all_song($songListAlbum);
        $model = $this->Album_Model->get_info($id);
        $data['model'] = $model;
        $data['title'] = 'Danh sách bài hát của album '.$model->name;
        $this->load->view('song/list-song', $data);
    }
}