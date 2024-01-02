<?php

$base_url = "http:localhost/news/";
$base_dir = "/news/";
$temp = explode("?", $_SERVER["REQUEST_URI"]);
$current_route = str_replace($base_url, "", $temp[0]);
unset($temp[0]);

$dbhost = "localhost";
$dbname = "newsdb";
$dbusername = "root";
$dbpassword = "";

?>