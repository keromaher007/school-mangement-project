<?php 

include_once("BookModel.php");
$Objuser = new Book;
$Objuser->delete($_REQUEST["Id"]);
header("location:Books.php");


?>