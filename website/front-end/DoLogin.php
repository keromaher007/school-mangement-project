<?php
session_start();
$UserName = $_REQUEST["Email"];
$UserPass = $_REQUEST["Password"];
if ($UserName == "kero@gmail.com" && $UserPass=="123")
{
$_SESSION["Email"]=$UserName;
header("location:Home.php");
}
else
{
    header("location:LoginView.php");
}



?>