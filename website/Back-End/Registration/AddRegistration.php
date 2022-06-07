<?php

?>
<?php
include_once("RegistrationModel.php");
$ObjUser = new Registration;
$ObjUser->setSid($_POST["Sid"]);
$ObjUser->setPStatus($_POST["PStatus"]);
$ObjUser->setDay($_POST["Day"]);
$ObjUser->setTime($_POST["Time"]);
$ObjUser->Store();
header("location:C:\wamp64\www\website\Back-End\Registration Details\AddRegistrationDetailsView.php?RID=4");

?>