<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: School Education
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <form action="AddRegistrationDetails.php?RID=<?php $RID ?>" method="POST">
        <h1>Registration Details</h1>
    <table border="5">   
    <tr>
            <td><h4>Select Courses</h4></td>
            <td><h4>Course Name</h4></td>
            <td><h4>Course Code</h4></td>
            
        </tr>
        <?php
        include_once("CourseModel.php");
        $obj = new Course;
        $arr =[];
        $arr = $obj->ListCourses();
        $RID = $_REQUEST["RID"];
        for($i=0;$i<count($arr);$i++)
        {
        echo "<tr><td><input type=checkbox name=CourseSelect[] value = ".$arr[$i]->getid." ></td><td>". $arr[$i]->getName."</td><td>".$arr[$i]->getCode."</td>";
        }
        ?>
        <tr><td> <input type="submit" value="select"> </td></tr>
    </table>
    </form>
  
</body>
</html>