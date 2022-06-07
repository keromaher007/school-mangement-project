<?php
session_start();
$UserName = $_REQUEST["StudentName"];
$UserPass = $_REQUEST["StudentPass"];
if ($UserName == "maher" && $UserPass=="123")
{
$_SESSION["Email"]=$UserName;
header("location:index.php");
}
else
{
    header("location:LoginView.php");
}



?>