<?php

?>
?>
<?php 
include_once("UserTypeModel.php");
$ObjUser = new UserType;
$ObjUser->id= $_GET["Id"] ;
$ObjUser->setType($_POST["Type"]);
$ObjUser->update($ObjFileManager);
header("location:UserTypes.php");

?>