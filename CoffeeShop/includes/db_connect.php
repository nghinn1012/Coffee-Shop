<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $database="coffeeshop";

    $conn = mysqli_connect($servername,$username,$password,$database,3306);
    
    if(mysqli_connect_errno())
       die("Connection failed!".mysqli_connect_error());
?>

