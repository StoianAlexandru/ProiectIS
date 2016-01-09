<?php 
$CL_sms_Serv="Free sms";
$subject=$_CL_sms_Serv;
$to=$_POST['to'];
$from=$_POST['from'];
$carrier=$_POST['carrier'];
$message=$_POST['message'];
$numComp =$_POST['to'.'carrier'];
$rateDisclaimer = " Poate percepe taxe";

mail($to.$carrier,$subject,"From: ".$from."\r\n\n".$message."\r\n\n".$rateDisclaimer);
 ?>