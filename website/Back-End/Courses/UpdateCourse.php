<?php

?>
?>
<?php 
include_once("CourseModel.php");
$ObjUser = new Course;
$ObjUser->id= $_GET["Id"] ;
$ObjUser->setName($_POST["Name"]);
$ObjUser->setCode($_POST["Code"]);
$ObjUser->setDay($_POST["Day"]);
$ObjUser->setTime($_POST["Time"]);
$ObjUser->update($ObjFileManager);
header("location:Courses.php");

?>