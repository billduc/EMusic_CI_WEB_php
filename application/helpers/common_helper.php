<?php
/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 27/05/2017
 * Time: 05:52
 */

function pre($list, $exit = true)
{
    echo "<pre>";
    print_r($list);
    if ($exit) {
        die();
    }
}

if (!function_exists('array_maker')) {

    function array_maker($key, $data, $value)
    {
        $arr = [];
        foreach ($data as $d) {
            if (is_array($value)) {
                $temp = [];
                foreach ($value as $v) {
                    $temp[] = $d->{$v};
                }
                $arr[$d->{$key}] = $temp;
            } else {
                $arr[$d->{$key}] = $d->{$value};
            }
        }
        return $arr;
    }
}
if (!function_exists('dd')) {
    function dd($var) {
        $backtrace = debug_backtrace();
        $fileinfo = null;
        if (!empty($backtrace[0]) && is_array($backtrace[0])) {
            $fileinfo = $backtrace[0]['file'] . ":" . $backtrace[0]['line'];
        }
        echo "Debug at: $fileinfo</br>";
        var_dump($var);
        die;
    }
}
