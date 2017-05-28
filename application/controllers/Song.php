<?php

/**
 * Created by dinhty.luu@gmail.com
 * Date: 27/05/2017
 * Time: 15:33
 */
class Song extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Singer_Model');
        $this->load->model('Song_Model');
        $this->load->model('Artist_Model');
        $this->load->model('SongType_Model');
    }

    public function create()
    {
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }
        $data['title'] = 'Create a news Song';

        $this->form_validation->set_rules('name', 'Name', 'required');

        $data = array();
        $data['content_view'] = 'admin/song/create';
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), 'name'));
        $data['listArtist'] = ($this->array_make('id', $this->Artist_Model->get_list(), 'name'));
        $data['listSongType'] = ($this->array_make('id', $this->SongType_Model->get_list(), 'name'));

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/master_layout', $data);
        } else {
            $this->Song_Model->set_song();
            redirect('admin/song');
        }
    }

    public function index()
    {
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }
        $data = [];

        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), 'name'));
        $data['listArtist'] = ($this->array_make('id', $this->Artist_Model->get_list(), 'name'));
        $data['listSongType'] = ($this->array_make('id', $this->SongType_Model->get_list(), 'name'));
        $data['listSong'] = $this->Song_Model->get_list();
        $data['content_view'] = 'admin/song/index';
        $data['title'] = 'Song List';
        $this->load->view('admin/master_layout', $data);
    }

    public function update()
    {
        if (!$this->user_is_login('admin')) {
            redirect('admin_site/login/login', 'refresh');
        }
        $id = $this->input->get('id', TRUE);
        if (!is_numeric($id)) {
            redirect('admin_site/login/login', 'refresh');
        }
        $this->load->model('Singer_Model');
        $data['title'] = 'Create a news singer';

        $this->form_validation->set_rules('name', 'Name', 'required');

        $data = array();
        $data['content_view'] = 'admin/song/update';
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), 'name'));
        $data['listArtist'] = ($this->array_make('id', $this->Artist_Model->get_list(), 'name'));
        $data['listSongType'] = ($this->array_make('id', $this->SongType_Model->get_list(), 'name'));

        if ($this->form_validation->run() === FALSE) {
            $data['song'] = $this->Song_Model->get_info($id);
            $this->load->view('admin/master_layout', $data);
        } else {
            $this->Song_Model->set_song($id);
            redirect('admin/song');
        }

    }

    public function delete()
    {
        $id = $this->input->get('id', TRUE);

        if (!$this->user_is_login('admin') || !$this->user_is_login('user') || !is_numeric($id)) {
            redirect(base_url(), 'refresh');
        }
        $song = $this->Song_Model->get_info($id);
        if ($song->user_id == $this->currentUser()->id){
            $this->Song_Model->delete((int)$id);
            redirect(base_url('user_site/user/manage'));
        }
        if ($this->user_is_login('admin')){
            $this->Song_Model->delete((int)$id);
            redirect('admin/song');
        }
    }

    public function listening()
    {
        $id = $this->input->get('id', TRUE);

        if (!is_numeric($id)) {
            redirect('admin_site/login/login', 'refresh');
        }
        $data = [];

        $data = $this->_forHeader($data);


        $data['song'] = $this->Song_Model->get_info($id);
        $data['listSong'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [6, 0]]);
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), ['name', 'avatar']));
        $this->Song_Model->updateView([$id]);
        $this->load->view('song/listening', $data);
    }

    public function listSong()
    {
        $data = [];

        $data = $this->_forHeader($data);


        $data['listSong'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [6, 0]]);
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), ['name', 'avatar']));
        $data['listSingerValue'] = $this->Singer_Model->get_list();
        $this->load->view('singer/list', $data);
    }

    public function bxh()
    {
        $data = [];

        $data = $this->_forHeader($data);

        $data['listSong'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [6, 0]]);
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), ['name', 'avatar']));
        $data['listSongAlbum'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [10, 0]]);
        $data['title'] = 'Danh sách bài hát của bảng xếp hạng ';
//        $this->dd($data['listSongValue']);
        $this->load->view('song/list-song', $data);
    }
}