
<?php

$html = file_get_contents('form.html');
if ( $html === false ) {
    die("Unable to load.");
}

$method = $_SERVER['REQUEST_METHOD'];
require 'form_validate.php';

if ( $method === 'POST' ) {
    ValidateForm($html, $arr_post, $file_arr, $filters, $files_ext);
} else {
    echo $html;
}

?>