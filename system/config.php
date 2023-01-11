<?php

$base_url = "http://localhost/tinymvc/";
$base_dir = "/tinymvc/";

//c?a=a
//[esfahanahan.com/index.php , a ]
$tmp = explode('?', $_SERVER['REQUEST_URI']);

//tmp[0] => mishe qabl az alamate soal
//tmp[0] => esfahanahan.com/index.php
$current_route = str_replace($base_dir, '', $tmp[0]);
unset($tmp);

