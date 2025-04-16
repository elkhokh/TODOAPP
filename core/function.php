<?php
require_once 'connection.php';
/*********************************** message function ******************************************** */
function set_messages($type_of_alert,$message_of_error)
{
    $_SESSION['message']=[
        'type'=>$type_of_alert,
        'text'=>$message_of_error,
    ];
}

function show_message()
{
    if(isset($_SESSION['message'])){
        $type = $_SESSION['message']['type'];//success or danger
        $text = $_SESSION['message']['text'];// email or name etc 
        echo "<div class='alert alert-$type'>$text</div>";
        unset($_SESSION['message']);
    }   
}

/******************* check connection *********************** */

/********************create task **************************** */
function  create_title_of_task($title){
$sql="INSERT INTO `TASKS` (`title`)
        VALUES('$title')";
       $result= mysqli_query($GLOBALS['conn'],$sql);
       return $result;

}
/************************* select tasks ************************* */
function select_tasks(){
$get=" SELECT * FROM `tasks` ORDER BY id ASC ";
$result=mysqli_query($GLOBALS['conn'], $get);
return $result;
}

