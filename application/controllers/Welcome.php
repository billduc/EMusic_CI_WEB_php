<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
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

    public function index()
    {
        $data = [];
        $data['listAlbum'] = $this->Album_Model->get_list(['order' => ['updated_at', 'DESC'], 'limit' => [3, 0]]);
        $data['listSong'] = $this->Song_Model->get_list(['order' => ['view_num', 'DESC'], 'limit' => [10, 0]]);
        $data['listSinger'] = ($this->array_make('id', $this->Singer_Model->get_list(), ['name', 'avatar']));
//        var_dump($data['listSinger']);die();
        $this->load->view('user/master_layout', $data);
    }
}
