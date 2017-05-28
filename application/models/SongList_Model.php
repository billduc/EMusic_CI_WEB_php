<?php

/**
 * Created by dinhty.luu@gmail.com
 * Date: 28/05/2017
 * Time: 08:46
 */
class SongList_Model extends MY_Model
{
    public $table = 'album_song_list';

    public function __construct()
    {
        parent::__construct();
    }



    public function set_data($data)
    {
        return $this->create($data);
    }

}