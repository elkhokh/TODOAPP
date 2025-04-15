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
/*************** here i can create database and table from phpmyadmin and  use the above statment******************** */

// sql quary  to create database---------------
$sql="create database if not exists todoapp";
// to go query 
$res=mysqli_query($conn,$sql);
//to check if you have error 
mysqli_error($conn);

// create tables ------------------------
$tables=  "create table if not exists `tasks`
        (
    `id` int PRIMARY KEY AUTO_INCREMENT ,
    `title` varchar(255) not null
        )";

$res=mysqli_query($conn,$tables);

mysqli_error($conn);

/******************************************************* */

// to close the connection with database
mysqli_close($conn);
/***************************************** close database ********************************************** */

echo "welcome to in database ";
