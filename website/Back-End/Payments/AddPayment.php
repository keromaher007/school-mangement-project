<?php

?>
<?php
include_once("PaymentModel.php");
$ObjUser = new Payment;
$ObjUser->setSid($_POST["Sid"]);
$ObjUser->setPStatus($_POST["PStatus"]);
$ObjUser->setDay($_POST["Day"]);
$ObjUser->setTime($_POST["Time"]);
$ObjUser->Store();
header("location:Payments.php");

?>