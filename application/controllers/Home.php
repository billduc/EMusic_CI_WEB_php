<?php
/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 26/05/2017
 * Time: 14:25
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        //$data = array();
        //$data['temp'] = 'user/home/index';
        $this->load->view('user/master_layout_login');
    }

}