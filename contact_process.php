<?php

    $to = "info@dartaanalytics.com.au";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
	$captcha = $_POST['g-recaptcha-response'];

	$headers = "From: " . $name . "\n\n";
	$headers .= "Reply-To: ". $from . "\n\n";

    $subject = "Webform contact from " . $from;

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Webform Email</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tbody><tr><td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);
	
?>