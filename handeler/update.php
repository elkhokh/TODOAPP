<?php

session_start();
include_once "../core/validation.php";
include_once "../core/function.php";
include_once "../core/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id=$_POST['id'];
        $title = trim(htmlspecialchars(htmlentities($_POST['title']))) ;
    // print_r($title);
    // exit;


    $error = valid_add_task($title);

    if (!empty($error)) {
        set_messages('danger', $error);
        header("Location: ../edit.php?id=$id");
        exit;
    }

  
    // print_r($title);
    // exit;

    if (update_title_of_task($id,$title)) 
    {
        set_messages('success', "Task Update Successfully ");
        header("Location: ../index.php");
        exit;
    }
    else {
        set_messages('danger', "Task Failed Update");
        header("Location: ../edit.php"); 
        exit;
    }
}





