<?php

$base_url = "http://localhost/tinymvc/";
$base_dir = "/tinymvc/";

$tmp = explode('?', $_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir, '', $tmp[0]);
unset($tmp);

