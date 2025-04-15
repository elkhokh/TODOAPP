<?php

// session_start();
include_once "../core/validation.php";
include_once "../core/function.php";

$host= "localhost";
$username  = "root";
$password  = "";
$database="todoapp";
$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn)
{
die("failed connection database".mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = trim(htmlspecialchars(htmlentities($_POST['title']))) ;
    // print_r($title);
    // exit;


    $error = valid_add_task($title);


    if (!empty($error)) 
    {
        set_messages('danger', $error);
        header("Location: ../index.php");
        exit;
    }

    if (create_title_of_task($title)) 
    {
        set_messages('success', "Task added Successfully ");
        header("Location: ../index.php");
        exit;
    }
    else {
        set_messages('danger', "Task Failed added");
        header("Location: ../index.php"); 
        exit;
    }
}