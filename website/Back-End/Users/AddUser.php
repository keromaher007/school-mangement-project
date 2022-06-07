<?php

?>
<?php
include_once("UserModel.php");
$ObjUser = new user;
$ObjUser->setFname($_POST["Fname"]);
$ObjUser->setLname($_POST["Lname"]);
$ObjUser->Store();
header("location:Users.php");

?>