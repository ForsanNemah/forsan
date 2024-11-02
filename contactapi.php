<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$service=$_POST['service'];


$message="مرحيا م فرسان ";
$message2=$message." مهتم بخدمة  ".$service." ورقمي هو ".$phone;

header("Location:https://api.whatsapp.com/send?phone=966568430828&text=".urlencode($message2));




?>