<?php

?>
<?php
include_once("CourseModel.php");
$ObjUser = new Course;
$ObjUser->setName($_POST["Name"]);
$ObjUser->setCode($_POST["Code"]);
$ObjUser->setDay($_POST["Day"]);
$ObjUser->setTime($_POST["Time"]);
$ObjUser->Store();
header("location:Courses.php");

?>