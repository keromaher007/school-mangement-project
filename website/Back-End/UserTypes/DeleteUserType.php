<?php 

include_once("UserTypeModel.php");
$Objuser = new UserType;
$Objuser->delete($_REQUEST["Id"]);
header("location:UserTypes.php");


?>