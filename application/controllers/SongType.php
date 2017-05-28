<?php

/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 28/05/2017
 * Time: 09:53
 */
class SongType extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('SongType_Model');

        $this->load->model('Song_Model');
        $this->load->model('Singer_Model');
    }
    public function list()
    {
        $data = [];

        $data = $this->_forHeader($data);


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

        $data['listSong'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [6, 0]]);
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), ['name', 'avatar']));
        $data['listSongAlbum'] = $this->Song_Model->get_list(['where' => ['type_id' => $id]]);
        $model = $this->SongType_Model->get_info($id);
        $data['model'] = $model;
        $data['title'] = 'Danh sách bài hát của thể loại '.$model->name;
//        $this->dd($data['listSongValue']);
        $this->load->view('song/list-song', $data);
    }
}