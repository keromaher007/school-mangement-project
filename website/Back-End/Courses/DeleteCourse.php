<?php 

include_once("CourseModel.php");
$Objuser = new Course;
$Objuser->delete($_REQUEST["Id"]);
header("location:Courses.php");


?>