<?php

?>
?>
<?php 
include_once("BookModel.php");
$ObjUser = new Book;
$ObjUser->id= $_GET["Id"] ;
$ObjUser->setName($_POST["Name"]);
$ObjUser->setISBN($_POST["ISBN"]);
$ObjUser->update($ObjFileManager);
header("location:Books.php");

?>