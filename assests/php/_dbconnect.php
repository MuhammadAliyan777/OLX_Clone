<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "olx";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("Faild to connect". mysqli_connect_error());
}

?>