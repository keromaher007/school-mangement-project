<?php 

include_once("RegistrationDetailsModel.php");
$Objuser = new RegistrationDetails;
$Objuser->delete($_REQUEST["Id"]);
header("location:Registration.php");


?>