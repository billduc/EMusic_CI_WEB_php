<?php

/**
 * Created by PhpStorm.
 * User: nguyennghia
 * Date: 5/25/17
 * Time: 3:42 PM
 */
class BackendBase extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('is_admin')){
            redirect(base_url());
        }
    }
}