<?php

$filters = [
    "bdate" => "/^[0-9]{4}-[0-9]{2}-[0-9]{2}\z/",
    "event" => "/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]\z/",
    "artist" => "/^[1-4]$/",
    "description" => "/^[-a-zA-Z0-9\s.',àâçéèêëîïôûùüÿñæœ]*$/",
    "promo" => "/^[-a-zA-Z0-9\sàâçéèêëîïôûùüÿñæœ]*$/",
    "venue_name" => "/^[-a-zA-Z0-9\s.',àâçéèêëîïôûùüÿñæœ]*$/",
    "venue_address_1" => "",
    "venue_address_2" => "",
    "city" => "",
    "region" => "",
    "postal" => "",
    "country" => "",
    "capacity" => "",
    "attendance" => "",
    "performance" => "",
    "time" => "",
    "contact_firstname" => "",
    "contact_lastname" => "",
    "email" => "",
    "number" => "",
    "recorded" => "",
    "submit" => "",
];

$files_ext = [
    "png" => "image/png",
    "pdf" => "application/pdf",
    "jpeg" => "image/jpeg",
];