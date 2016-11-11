<?php 
require_once('AfricasTalkingGateway.php');

$username = "Username";
$apiKey = "xxxxxxxxxxxxxxxxxxxxxx";

$recipients = "+254721878568";
$message = "Geronimo!!!";

$gateway = new AfricasTalkingGateway($username, $apiKey);
	try {

		$results = $gateway->sendMessage($recipients, $message);

		foreach ($results as $result) {
			echo "Number: ".$result->number."\n";
			echo "Status: ".$result->status."\n";
			echo "MessageId: ".$result->messageId."\n";
			echo "Cost: ".$result->cost."\n\n";
		}
	} catch (AfricasTalkingGatewayExemption $e) {
		echo "Error while sending:".$e->getMessage();
}

