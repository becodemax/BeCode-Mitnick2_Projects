<?php

function CheckWrongInput($arr, $filters) {
    $combined_arr = array_combine($arr, $filters);
    foreach ( $combined_arr as $input => $regx ) {
        if ( !preg_match($regx, $input) ) {
            return true;
        }
    }
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

function CheckFileExtension($file_arr, $files_ext) {
    $filename = $file_arr['name'];
    $extenstion = $file_arr['type'];
    if ( isset($filename) ) {
        if ( in_array($extenstion, $files_ext) ) {
            return true;
        }
    }
}

function CheckArraysLength($arr, $filters) {
    if ( sizeof(array_intersect_key($filters, $arr)) === sizeof($filters) ) {
        return true;
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

function PrintValues($arr) {
    foreach ( $arr as $key => $value ) {
        echo "<br>";
        echo "{$key} => {$value}";
    }
}