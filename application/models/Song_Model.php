<?php

/**
 * Created by dinhty.luu@gmail.com
 * Date: 27/05/2017
 * Time: 14:42
 */
class Song_Model extends MY_Model
{
    public $table = 'song';

    public function __construct()
    {
        parent::__construct();
    }


    public function countAll()
    {
        return $this->db->count_all($this->_table);
    }


    public function set_song($id = false)
    {

        $data = $this->input->post();
        if (isset($_FILES['file_media']) && !empty($_FILES['file_media']['name'])){
            $data['file_media'] = $this->uploadFileMp3();
        }
        if ($id === false) {
            return $this->create($data);
        } else {
            return $this->update($id, $data);
        }
    }

}