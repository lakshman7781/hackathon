<?php 
session_start();

 include('key.php');
$num=rand(1000,9999);
$_SESSION['otp']=$num;
$msg="Your Login OTP is ".$num;
require_once 'Twilio/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = $sid_key;
$token  = $token_key;
$twilio = new Client($sid, $token); 
 
$twilio->messages 
          ->create($number, array( 
              "body" => $msg,    
              "from" => "+1 475 255 2697",
          )
    );

 



 header("Location:verify.php");

?>
