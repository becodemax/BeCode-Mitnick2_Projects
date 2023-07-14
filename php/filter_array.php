<?php

$filters = [
    "bdate" => "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/",
    "event" => "/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$/",
    "artist" => "/^[1-4]$/",
    "description" => "/^[-a-zA-Z0-9\s.',àâçéèêëîïôûùüÿñæœ]*$/",
    "promo" => "/^[-a-zA-Z0-9\sàâçéèêëîïôûùüÿñæœ]*$/",
    "venue_name" => "/^[-a-zA-Z0-9\s.',àâçéèêëîïôûùüÿñæœ]*$/",
    "venue_address_1" => "/^[-a-zA-Z0-9\s.',àâçéèêëîïôûùüÿñæœ]*$/",
    "venue_address_2" => "/^[-a-zA-Z0-9\s.',àâçéèêëîïôûùüÿñæœ]*$/",
    "city" => "/^[-a-zA-Z\sàâçéèêëîïôûùüÿñæœ]*$/",
    "region" => "/^[-a-zA-Z\sàâçéèêëîïôûùüÿñæœ]*$/",
    "postal" => "/^[0-9]*$/",
    "country" => "/^[0-9]$/",
    "capacity" => "/^[0-9]$/",
    "attendance" => "/^[0-9]*$/",
    "performance" => "/^[0-9]*$/",
    "time" => "/^[0-9]*$/",
    "contact_firstname" => "/^[-a-zA-Z\s'àâçéèêëîïôûùüÿñæœ]*$/",
    "contact_lastname" => "/^[-a-zA-Z\s'àâçéèêëîïôûùüÿñæœ]*$/",
    "email" => "/^[\w\-\.]+@([\w-]+\.)+[\w-]{2,}$/",
    "number" => "/^[+][0-9]{11}$/",
    "recorded" => "/\b(yes|no)\b/",
    "submit" => "/submit/",
];

$files_ext = [
    "png" => "image/png",
    "pdf" => "application/pdf",
    "jpeg" => "image/jpeg",
];