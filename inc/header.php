<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
<div class="container text-center">
        <div class="row">
            <div class="col-8 mx-auto">

<?php
session_start();
include_once "core/function.php";  
require_once "core/connection.php";
?>
<div class="container  px-3 px-lg-3 my-3">
<?php  show_message();  ?>
</div>
            </div></div>
</body>