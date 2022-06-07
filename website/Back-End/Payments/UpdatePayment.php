<?php

?>
?>
<?php 
include_once("PaymentModel.php");
$ObjUser = new Payment;
$ObjUser->id= $_GET["Id"] ;
$ObjUser->setSid($_POST["Sid"]);
$ObjUser->setPStatus($_POST["PStatus"]);
$ObjUser->setDay($_POST["Day"]);
$ObjUser->setTime($_POST["Time"]);;
$ObjUser->update($ObjFileManager);
header("location:Payments.php");

?>