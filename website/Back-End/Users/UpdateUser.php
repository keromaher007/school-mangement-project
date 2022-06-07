<?php

?>
?>
<?php 
include_once("UserModel.php");
$ObjUser = new user;
$ObjUser->id= $_GET["Id"] ;
$ObjUser->setFname($_POST["Fname"]);
$ObjUser->setLname($_POST["Lname"]);
$ObjUser->update($ObjFileManager);
header("location:Users.php");

?>