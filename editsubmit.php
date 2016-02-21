<?php
$to = "kmflynn@mac.com";
$nameline = $_REQUEST['nameline'] ;  
$emailline = $_REQUEST['emailline'] ; 
$consign1 = $_REQUEST['consign1'] ;      
$headers = "Edit Submit:\n $nameline";  
$name = "Edit Submit: $nameline";
$email = "Email:\n $emailline";
$body = "Edit Submit:\n$nameline\n\nEmail:\n $emailline\n\nMessage:\n $consign1";
$sent = mail($to, $name, $body, $headers) ;
if($sent)
{echo "<script language=javascript>window.location = 'thanks.html';</script>";}
else
{echo "<script language=javascript>window.location = 'shit.html';</script>";}
?>