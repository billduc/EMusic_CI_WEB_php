<?php

/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 25/05/2017
 * Time: 13:42
 */
class Student extends CI_Controller
{

    public function index()
    {
            $this->load->model("student_model");
            $data["list"] = $this->student_model->getList();
            $this->load->view("student/index", $data);
    }
}