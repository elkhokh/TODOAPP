<?php
/*
host      = "localhost";
username  = "root";
password  = "";
*/

$host= "localhost";
$username  = "root";
$password  = "";
$database="";
$conn=mysqli_connect($host,$username,$password,$database);

// sql quary 

// $sql="create database if not exists todoapp";
// $res=mysqli_query($conn,$sql);


if(!$conn)
{
die("failed connection database".mysqli_connect_error());
}

// to close the connection with database
mysqli_close($conn);

