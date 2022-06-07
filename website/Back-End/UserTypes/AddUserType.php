<?php

?>
<?php
include_once("UserTypeModel.php");
$ObjUser = new UserType;
$ObjUser->setType($_POST["Type"]);
$ObjUser->Store();
header("location:UserTypes.php");

?>