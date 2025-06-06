<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "vec_sys";

$conn = new mysqli($server, $username, $password, $database);

if($conn->connect_error){
    die("Connection failed ".$conn->connect_errno."");
}
?>