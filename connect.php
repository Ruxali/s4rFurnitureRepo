<?php
$host="localhost";
$user="root";
$password="";
$dbname="s4rfurniture";

$connect=mysqli_connect($host,$user,$password,$dbname);

if ($connect->connect_errno != 0) {
	die('Connection error');
}
?>