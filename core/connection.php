<?php
/*************************************** open database ******************************************** */
$host= "localhost";
$username  = "root";
$password  = "";
$database="todoapp";
$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn)
{
die("failed connection database".mysqli_connect_error());
}