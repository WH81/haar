<?php

$name = ucwords($_POST['name']); // required
$email = $_POST['email']; // required
$phone = $_POST['phone']; // required
$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$customer = $_POST['customer']; // required
$comments = $_POST['comments']; // required

$message = '<html><body>';
$message .= '<img class="logo img-responsive" src="images/logos/logo.svg" alt="Hite Autobody and Restoration">';
$message .= '<table style="border-color: #666;" cellpadding="5">';
$message .= "<tr style='background: #e0e0e0;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr><td><strong>Make:</strong> </td><td>" . strip_tags($_POST['make']) . "</td></tr>";
$message .= "<tr><td><strong>Model:</strong> </td><td>" . strip_tags($_POST['model']) . "</td></tr>";
$message .= "<tr><td><strong>Year:</strong> </td><td>" . strip_tags($_POST['year']) . "</td></tr>";
$message .= "<tr><td><strong>Customer:</strong> </td><td>" . strip_tags($_POST['customer']) . "</td></tr>";
$message .= "<tr><td><strong>Comments:</strong> </td><td>" . strip_tags($_POST['comments']) . "</td></tr>";
$message .= "</table>";
$message .= '</body></html>';

$to = 'example@yahoo.com';
$subject = "Service inquiry from " . $name . ".";
$from = 'Name here <example@yahoo.com>';

$headers = 'From: {$from}\n'; 
$headers .= 'Reply-To: {$email}\n'; 
$headers .= 'X-Mailer: PHP/' .phpversion(). '\n';		 
$headers .= 'MIME-Version: 1.0\n';
$headers .= 'Content-Type: text/html; charset=iso-8859-1\n';	
		   
$authorized = '-fexample@yahoo.com';

$result = mail($to, $subject, $message, $headers, $authorized);

echo $result ? '<h3>Hello, ' . $name . '.</h3>' . '<h4>Thank you for contacting  Autobody & Restoration!</h4>' . '<h4>We have received your message and will reply as soon as possible.</h4>' : '<h4>Sorry, your mail has not sent. Please try again.</h4>';




