<?php 

include_once("UserModel.php");
$Objuser = new user;
$Objuser->delete($_REQUEST["Id"]);
header("location:Users.php");


?>