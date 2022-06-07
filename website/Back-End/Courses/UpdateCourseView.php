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

<body>
    <br>
    <form action="UpdateCourse.php?<?php echo("Id=".$_REQUEST["Id"]) ?>" method="POST">
    <span class="label">Course Name</span>
        <input type="text" name="Name">
        <span class="label">Course Code</span>
        <input type="text" name="Code">
        <span class="label">Course day</span>
        <input type="day" name="Day">
        <span class="label">Course time</span>
        <input type="time" name="Time">
        <input type="submit">
    </form>

</body>
</html>