<?php

require 'filter_array.php';
require 'form_functions.php';

$arr_post = $_POST;
$file_arr = $_FILES['fileToUpload'];

function ValidateForm($html, $arr_post, $file_arr, $filters, $files_ext) {
    if ( CheckArraysLength($arr_post, $filters) === false ) {
        $err_message = "Something went wrong.";
        Error($err_message, $html);
    } elseif ( CheckForEmpty($arr_post) === true ) {
        $err_message = "One or more fields haven't been completed.";
        Error($err_message, $html);
    } elseif ( CheckWrongInput($arr_post, $filters) === true ) {
        $err_message = "Forbidden characters have been detected in one or more fields.";
        Error($err_message, $html);
    } elseif ( CheckFileExtension($file_arr, $files_ext) === false ) {
        $err_message = "Please only upload an image (png, jpeg or pdf).";
        Error($err_message, $html);
    } else {
        $sanitized_arr = SanitizeInput($arr_post);
        $file = $file_arr['name'];
        echo "Following data has been successfully sent: ";
        PrintValues($sanitized_arr);
        echo "<br> file => $file";
    }
}