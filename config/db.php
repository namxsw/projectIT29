<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "final_project";
    $conn = mysqli_connect($host,$user,$password,$database);
    if(!$conn){
        echo "can not connect <br>";
        exit;
    }
?>