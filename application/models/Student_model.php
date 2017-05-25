<?php

/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 25/05/2017
 * Time: 13:42
 */
class Student_model
{
    public function getList(){
        $data = array(
            array("id" => 1, "name" => "Chu Kim Thang", "age" => 22),
            array("id" => 2, "name" => "Pham Ngoc Son", "age" => 21 ),
            array("id" => 3, "name" => "Nguyen Manh Quang", "age" => 23)
        );
        return $data;
    }


}