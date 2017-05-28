<?php

/**
 * Created by dinhty.luu@gmail.com
 * Date: 28/05/2017
 * Time: 07:48
 */
class Album_Model extends MY_Model
{
    public $table = 'album';
    public function __construct()
    {
        parent::__construct();
    }



    public function set_data($id = false)
    {

        $data = $this->input->post();
        if (isset($_FILES['thumbnail']) && !empty($_FILES['thumbnail']['name'])){
            $data['thumbnail'] = $this->uploadFile('thumbnail');
        }
        if ($id === false) {
            return $this->create($data);
        } else {
            return $this->update($id, $data);
        }
    }

}