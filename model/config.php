<?php
    require_once(__DIR__ . "/database.php");
    
    $path = "/blog/";
    
    $host = "localhost";
    $usename = "root";
    $password = "root";
    $database = "blog_db";
    
    $connection = new Database($host, $username, $password, $database);  