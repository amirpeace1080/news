<?php

$base_url = 'http://localhost/news/';
$base_dir = '/news/';

$tmp = explode('?', $_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir, "", $tmp[0]);
unset($tmp);



//database Config
$dbHost = 'localhost';
$dbName = 'newsdb';
$dbUsername = 'root';
$dbPassword = '';