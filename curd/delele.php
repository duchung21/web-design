<?php
include_once "./User.php";

//var_dump($_POST);

if (isset($_POST['id']))
{
    $id = $_POST['id'];
    User::destroy($id);
    $_SESSION['message'] = "Delete success";
    header("location:./index.php");
}else{
    $_SESSION['message'] = "User not found";
    header("location:./index.php");
}