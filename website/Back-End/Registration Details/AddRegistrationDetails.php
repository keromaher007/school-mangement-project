<?php

?>
<?php
include_once("RegistrationDetailsModel.php");
$Obj = new RegistrationDetails;
for($i=0;$i<6;$i++)
{
foreach ($_REQUEST["CourseSelect"] as $myCourse)
{
    $Obj = new RegistrationDetails;
    if($myCourse != NULL)
    {
    $Obj->setRegistrationId([$_REQUEST["RID"]]);
    $Obj->setCourseId($myCourse);
    $Obj->Store();
    }
}
}
header("location:C:\wamp64\www\website\Back-End\Registration Details\RegistrationDetails.php");

?>