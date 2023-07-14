<?php

// check if a variable is missing or compromised by comparing the size of post array with filter array
function CheckArraysLength($arr, $filters) {
    $arr_size = sizeof(array_intersect_key($arr, $filters));
    if ( $arr_size === sizeof($filters) ) {
        return true;
    } elseif ( !in_array('recorded', $arr) ) { 
        return false;
    }
}

// check for any empty field except venue_address_2
function CheckForEmpty($arr) {
    if ( in_array('', $arr) && $arr['venue_address_2'] !== '' ) {
        return true;
    }
}

// compare post array values with filters array values (regex)
function CheckWrongInput($arr, $filters) {
    $combined_arr = array_combine($arr, $filters);
    foreach ( $combined_arr as $input => $regx ) {
        if ( !preg_match($regx, $input) ) {
            return true;
        }
    }
}

// check the uploaded file extension
function CheckFileExtension($file_arr, $files_ext) {
    $extension = $file_arr['type'];
    if ( isset($extension) ) {
        if ( in_array($extension, $files_ext) ) {
            return true;
        } else {
            return false;
        }
    }
}

// classic php sanitizing function just to be sure
function SanitizeInput($arr) {
    foreach ( $arr as $key => $value ) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        $arr[$key] = strtolower($value);
    }
    return $arr;
}

// display error message over html
function Error($err_message, $html) {
    $error = '<div style="background-color:red; color: white; padding: 10px; position: absolute; top: 0; left: 50%; width: 90%; text-align: center; transform: translate(-50%,0); z-index: 9999;">'.$err_message.'</div>';
    $html = str_replace('<body>', '<body>'.$error, $html);
    echo $html;
}

// final print of every values
function PrintValues($arr) {
    foreach ( $arr as $key => $value ) {
        echo "<br>";
        echo "{$key} => {$value}";
    }
}