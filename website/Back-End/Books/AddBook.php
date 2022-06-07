<?php

?>
<?php
include_once("BookModel.php");
$ObjUser = new Book;
$ObjUser->setName($_POST["Name"]);
$ObjUser->setISBN($_POST["ISBN"]);
$ObjUser->Store();
header("location:Books.php");

?>