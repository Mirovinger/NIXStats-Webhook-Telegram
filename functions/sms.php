<?php
function sms($message)
{
	$client = new SoapClient ('http://turbosms.in.ua/api/wsdl.html');
	$auth = array('login' => 'YOUR_LOGIN', 'password' => 'YOUR_VERY_STRONG_PASSWORD');
	$result = $client->Auth ($auth);
	$sms = Array ('sender' => 'SENDER_NAME','destination' => '+380XXXXXXXXX,+380XXXXXXXXX','text' => $message);
	$result = $client->SendSMS ($sms);
	return $result;
}
?>
