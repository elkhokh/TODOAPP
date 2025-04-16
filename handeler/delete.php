<?php
session_start();
include_once "../core/validation.php";
include_once "../core/function.php";
include_once "../core/connection.php";

if($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST['id']) || empty($_POST['id']))
    {
    set_messages('danger', "Error in data send try again");
    header("Location: ../index.php");
    exit;
    }

    $id = $_POST['id'];
    if (delete_task($id))
     {
        set_messages('success', "TASK removed  ");
        header("Location: ../index.php");
        exit;
    } 
    else {
        set_messages('danger', "Failed to remove task ");
        header("Location: ../index.php");
        exit;
    }