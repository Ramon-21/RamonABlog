<?php
    require_once(__DIR__ . "/../model/config.php");
    
   $title = filter-input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
   $post = filter-input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
   
   $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'"); 
   
   if($query){
      echo"<p>Successfully inserted post: $title</p>" ;
   } 
   else{
      echo"<p>$connection->error</p>";
   }
              