<?php
function sms($message)
{
	global $turbosmslogin, $turbosmspassword, $turbosmssender, $turbosmsrecipient;
	$client = new SoapClient ('http://turbosms.in.ua/api/wsdl.html');
	$auth = array('login' => $turbosmslogin, 'password' => $turbosmspassword);
	$result = $client->Auth ($auth);
	$sms = Array ('sender' => $turbosmssender,'destination' => $turbosmsrecipient,'text' => $message);
	$result = $client->SendSMS ($sms);
	return $result;
}
?>
