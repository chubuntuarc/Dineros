<?php
session_start();
if($_SESSION["user_id"] != 0){
    $user =$_SESSION["user_id"];
}else{
    $_SESSION["user_id"] = 0;
}
?>
