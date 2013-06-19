<?php namespace Tsmith86\Twilio;

class Wrapper 
{	
	$twilio;

	 function __construct ($account_id, $auth_token)
	 {
		
		require_once '../../../vendor/twilio/Services/Twilio/Twilio.php'

	 	$this->twilio = new Services_Twilio($account_sid, $auth_token);
	 }
}