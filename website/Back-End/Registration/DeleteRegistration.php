<?php 

include_once("RegistrationModel.php");
$Objuser = new Registration;
$Objuser->delete($_REQUEST["Id"]);
header("location:Registration.php");


?>