<?php 
$host="localhost";
$username="root";
$password="";
$db="database";
$conn= mysqli_connect($host,$username,$password,$db);
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
else{
    echo "successfully connected";
}
?>