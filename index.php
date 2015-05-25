<?php 
require_once('AfricasTalkingGateway.php');

$username = "Ammly";
$apiKey = "d367d7748a77b064fb7739d65fdc710c2c80e45cbe6292afdf262fc0370e12bc";

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

