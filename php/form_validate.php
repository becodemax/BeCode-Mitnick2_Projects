<?php

require 'filter_array.php';
require 'form_functions.php';

$arr_post = $_POST;
$file_arr = $_FILES['fileToUpload'];

// multiple checks on the inputs
function ValidateForm($html, $arr_post, $file_arr, $filters, $files_ext) 
{
    // check every input var names and their integrity
    if ( CheckArraysLength($arr_post, $filters) === false ) {
        $err_message = "Something went wrong.";
        Error($err_message, $html);

    // check for empty required fields
    } elseif ( CheckForEmpty($arr_post) === true ) {
        $err_message = "Please complete all the fields.";
        Error($err_message, $html);

    // check for any forbidden characters in fields (regex)
    } elseif ( CheckWrongInput($arr_post, $filters) === true ) {
        $err_message = "Please complete all the fields properly.";
        Error($err_message, $html);

    // check file extension (only png, jpeg or pdf)
    } elseif ( CheckFileExtension($file_arr, $files_ext) === false ) {
        $err_message = "Please only upload an image (png, jpeg or pdf).";
        Error($err_message, $html);

    // if no errors above, sanitize all the inputs and print them (for now)
    } else {
        $sanitized_arr = SanitizeInput($arr_post);
        $file = $file_arr['name'];
        echo "Following data has been successfully sent: ";
        PrintValues($sanitized_arr);
        echo "<br> file => $file";
    }
}