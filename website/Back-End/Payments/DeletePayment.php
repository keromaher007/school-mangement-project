<?php 

include_once("PaymentModel.php");
$Objuser = new Payment;
$Objuser->delete($_REQUEST["Id"]);
header("location:Payments.php");


?>