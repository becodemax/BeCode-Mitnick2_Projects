
<?php

$html = file_get_contents('form.html');
if ( $html === false ) {
    die("Unable to load.");
}

$method = $_SERVER['REQUEST_METHOD'];
require 'filter_array.php';

if ( $method === 'POST' ) {
    $arr_post = $_POST;
    $file_arr = $_FILES['fileToUpload'];
    if ( CheckArraysLength($arr_post, $filters) == false ) {
        $err_message = "Please fill all the fields.";
        Error($err_message, $html);
    } elseif ( CheckForEmpty($arr_post) == true ) {
        $err_message = "One or more fields haven't been completed.";
        Error($err_message, $html);
    } elseif ( CheckFile($file_arr, $files_ext) == false ) {
        $err_message = "Please only upload an image (png, jpeg or pdf).";
        Error($err_message, $html);
    } else {
        $sanitized_arr = SanitizeInput($arr_post);
        print_r($sanitized_arr);
        print_r($file_arr['name']);
    }
} else {
    echo $html;
}

function SanitizeInput($arr) {
    foreach ( $arr as $key => $value ) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        $arr[$key] = strtolower($value);
    }
    return $arr;
}

function CheckFile($file_arr, $files_ext) {
    $filename = $file_arr['name'];
    $extenstion = $file_arr['type'];
    if ( isset($filename) ) {
        if ( in_array($extenstion, $files_ext) ) {
            return true;
        }
    } else {
        return false;
    }
}

function CheckArraysLength($arr, $filters) {
    if ( sizeof(array_intersect_key($filters, $arr)) === sizeof($filters) ) {
        return true;
    } else {
        return false;
    }
}

function CheckForEmpty($arr) {
    if ( in_array('', $arr) ) {
        return true;
    }
}

function Error($err_message, $html) {
    $error = '<div style="background-color:red; color: white; padding: 10px; position: absolute; top: 0; left: 50%; width: 90%; text-align: center; transform: translate(-50%,0); z-index: 9999;">'.$err_message.'</div>';
    $html = str_replace('<body>', '<body>'.$error, $html);
    echo $html;
}

?>