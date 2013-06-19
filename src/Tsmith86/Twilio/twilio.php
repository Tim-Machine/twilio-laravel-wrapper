<?php namespace Tsmith86\Twilio;

define("DS", DIRECTORY_SEPARATOR );
require_once  base_path(). DS. "vendor".DS."twilio".DS."sdk".DS."Services".DS."Twilio.php";

use Services_Twilio;

class Wrapper 
{	
	public $twilio;
	public $account; 

	 function __construct ($account_id, $auth_token)
	 {
	 	$this->twilio = new Services_Twilio($account_id, $auth_token);
	 	$this->account = $this->twilio->account;
	 }
}