<?php
define('ROOT', 'http://localhost/blog/public');

$url = $_GET['url'] ?? 'home';
$url = explode("/", $url); //explode creates an array of items separated by /

$page_name = trim($url[0]);

$filename = "../app/pages/".$page_name.".php";

//checking if file exists
if(file_exists($filename)){
    
    require_once $filename;

}else{
    require_once "../app/pages/404.php";
}

// echo "<pre>";
// echo $filename;
// print_r($url);
// echo "HomePage";
