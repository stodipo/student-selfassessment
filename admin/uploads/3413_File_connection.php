<?php
$server="localhost";
$pass="";
$database="docrepo";
$user="root";
$conn=mysqli_connect($server,$user,$pass,$database);
if($conn->connect_error){
	die("Connection failed" .$conn->connect_error);
}

?>