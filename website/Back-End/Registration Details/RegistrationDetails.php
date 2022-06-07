<?php

?>
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

<h1>Registrations</h1>
    <table border="5">   
    <tr>
            <td><h4>Id</h4></td>
            <td><h4>Student id</h4></td>
            <td><h4>Paid Status</h4></td>
            <td><h4>Payment Day</h4></td>
            <td><h4>Payment Time</h4></td>
            <td><h4>Delete| Update</h4></td>
            
        </tr>
        <?php
        include_once("RegistrationModel.php");
        $obj = new Registration;
        $arr =[];
        $arr = $obj->ListRegistrations();
        for($i=0;$i<count($arr);$i++)
        {
        echo "<tr><td>".$arr[$i]->getid."</td><td>". $arr[$i]->getSid."</td><td>".$arr[$i]->getPStatus."</td><td>". $arr[$i]->getDay."</td><td>". $arr[$i]->getTime."</td><td><a href=DeleteRegistration.php?Id=".$arr[$i]->getid.">Delete</a>|\r<a href= UpdateRegistrationView.php?Id=".$arr[$i]->getid.">Update</a></td></tr>";
        }
        ?>
        <tr><td> <a name="" id="" class="btn btn-primary" href="AddRegistration.html" role="button">Add Registration</a> </td></tr>
    </table>

</body>

</html>