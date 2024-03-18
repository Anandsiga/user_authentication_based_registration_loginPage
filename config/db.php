<?php 
    $username="root";
    $password="";
    $host="localhost";
    $db="phpecom";
    $conn=mysqli_connect($host,$username,$password,$db);
    if(!$conn)
    {
        die("connecton failed".mysqli_connect_error());
        header('Location: index.php');
    }
    