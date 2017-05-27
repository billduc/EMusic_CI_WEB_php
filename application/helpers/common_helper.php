<?php
/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 27/05/2017
 * Time: 05:52
 */

function pre($list, $exit =  true){
    echo "<pre>";
    print_r($list);
    if ($exit){
        die();
    }
}