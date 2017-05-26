<?php

$name = ucwords($_POST['name']); // required
$email = $_POST['email']; // required
$phone = $_POST['phone']; // required
$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$customer = $_POST['customer']; // required
$comments = $_POST['comments']; // required

$to = 'example@yahoo.com';
$subject = 'Service inquiry from ' . $name . '.';
$message = '<html><body>';
$message .= '<img style="text-align:center;width:100%;height:auto;margin:0 auto;" src="http://www.example.com/qa/qa/public/images/logos/logo.svg" alt="example Autobody and Restoration">';
$message .= '<h2 style="text-align:center;background:rgba(0,0,0,0.05);border-bottom:1px solid #e0e0e0;padding:5px;font-size:110%;">Customer Form Data</h2>';

$message .= '<table style="text-align:left;margin:0 auto;width:100%">';

$message .= '<tr style="background:rgba(0,0,0,0.02);line-height:175%;">
<td style="border:1px solid #e0e0e0;padding:5px;"><strong>Name:</strong></td>
<td style="border:1px solid #e0e0e0;padding:5px;">' . strip_tags($_POST['name']) . '</td></tr>';

$message .= '<tr style="background:rgba(0,0,0,0.05);line-height:175%;">
<td style="border:1px solid #e0e0e0;padding:5px;"><strong>Email:</strong></td>
<td style="border:1px solid #e0e0e0;padding:5px;">' . strip_tags($_POST['email']) . '</td></tr>';

$message .= '<tr style="background:rgba(0,0,0,0.02);line-height:175%;">
<td style="border:1px solid #e0e0e0;padding:5px;"><strong>Phone:</strong></td>
<td style="border:1px solid #e0e0e0;padding:5px;">' . strip_tags($_POST['phone']) . '</td></tr>';

$message .= '<tr style="background:rgba(0,0,0,0.05);line-height:175%;">
<td style="border:1px solid #e0e0e0;padding:5px;"><strong>Make:</strong></td>
<td style="border:1px solid #e0e0e0;padding:5px;">' . strip_tags($_POST['make']) . '</td></tr>';

$message .= '<tr style="background:rgba(0,0,0,0.02);line-height:175%;">
<td style="border:1px solid #e0e0e0;padding:5px;"><strong>Model:</strong></td>
<td style="border:1px solid #e0e0e0;padding:5px;">' . strip_tags($_POST['model']) . '</td></tr>';

$message .= '<tr style="background:rgba(0,0,0,0.05);line-height:175%;">
<td style="border:1px solid #e0e0e0;padding:5px;"><strong>Year:</strong></td>
<td style="border:1px solid #e0e0e0;padding:5px;">' . strip_tags($_POST['year']) . '</td></tr>';

$message .= '<tr style="background:rgba(0,0,0,0.02);line-height:175%;">
<td style="border:1px solid #e0e0e0;padding:5px;"><strong>Customer:</strong></td>
<td style="border:1px solid #e0e0e0;padding:5px;">' . strip_tags($_POST['customer']) . '</td></tr>';

$message .= '<tr style="background:rgba(0,0,0,0.05);line-height:175%;">
<td style="border:1px solid #e0e0e0;padding:5px;"><strong>Comments:</strong></td>
<td style="border:1px solid #e0e0e0;padding:5px;">' . strip_tags($_POST['comments']) . '</td></tr>';
$message .= '</table>';
$message .= '</body></html>';

$from = 'example <example@example.com>';

/*
$headers = 'From: {$from}'; 
$headers .= 'Reply-To: {$email}'; 
$headers .= 'X-Mailer: PHP/' .phpversion(). '\n';		 
$headers .= 'MIME-Version: 1.0';
$headers .= 'Content-Type: text/html; charset=iso-8859-1\n';	
*/		

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Wayne <example@yahoo.com>';
$headers[] = 'From: example <example@yahoo.com>';
   
// $authorized = '-fexample@yahoo.com';
// $result = mail($to, $subject, $message, $headers, $authorized);

 mail($to, $subject, $message, implode("\r\n", $headers));
 
 
 
echo $result ? '<h3>Hello, ' . $name . '.</h3>' . '<h4>Thank you for contacting example Autobody & Restoration!</h4>' . '<h4>We have received your message and will reply as soon as possible.</h4>' : '<h4>Sorry, your mail has not sent. Please try again.</h4>';

