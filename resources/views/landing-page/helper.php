<?php

function send_email($subject, $message)
{
	require 'mailserver/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Port = 587;
	$mail->Username = 'emporeht@gmail.com';                 // SMTP username
	$mail->Password = '&Not3M4il';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

	$mail->From = 'from@example.com';
	$mail->FromName = 'PT Empore Hezer Tama';
	$mail->addAddress('marketing@empore.co.id', 'PT Empore Hezer Tama');     // Add a recipient
	$mail->addAddress('ramdoni@empore.co.id', 'PT Empore Hezer Tama');     // Add a recipient
	#$mail->addAddress('ellen@example.com');               // Name is optional
	#$mail->addReplyTo('info@example.com', 'Information');
	#$mail->addCC('cc@example.com');
	#$mail->addBCC('bcc@example.com');

	#$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	#$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	#$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = $subject;
	$mail->Body    = $message;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}
}

function email_request_quote($post, $subject)
{
	$msg  = 'Dear Empore,<br />';
    $msg .= '<p>Someone contact us </p>';
    $msg .= '<table>';
    $msg .= '<tr><td style="width: 100px;">Full Name</td><td> : '. $post['full_name'] .'</td></tr>';
    $msg .= '<tr><td>Company Name</td><td> : '. $post['company_name'] .'</td></tr>';
    $msg .= '<tr><td>Email Address</td><td> : '. $post['email_address'] .'</td></tr>';
    $msg .= '<tr><td>Phone Number</td><td> : '. $post['phone_number'] .'</td></tr>';
    $msg .= '<tr><td>Message</td><td> : '. $post['message'] .'</td></tr>';
    $msg .= '</table><br /><br />';
    $msg .= 'Regards<br />Thanks';
    
    $subject = 'PT Empore Hezer Tama - Contact Us '. $subject;

	send_email($subject, $msg);
}

function email_consultation($post)
{
	$msg  = 'Free Consultation,<br />';

    $msg .= '<table>';
    $msg .= '<tr><td style="width: 100px;">Full Name</td><td> : '. $post['full_name'] .'</td></tr>';
    $msg .= '<tr><td>Company Name </td><td> : '. $post['company_name'] .'</td></tr>';
    $msg .= '<tr><td>Email Address </td><td> : '. $post['email_address'] .'</td></tr>';
    $msg .= '<tr><td>Phone Number </td><td> : '. $post['phone_number'] .'</td></tr>';
    $msg .= '<tr><td>Contact Message </td><td> : '. $post['contact'] .'</td></tr>';
    $msg .= '<tr><td>Message </td><td> : '. $post['message'] .'</td></tr>';
    $msg .= '<tr><td colspan="2"> '. $post['user_role'] .'</td></tr>';
    $msg .= '</table><br /><br />';
    $msg .= 'Regards<br />Thanks';
    
    $subject = 'PT Empore Hezer Tama - Free Consultation '. $subject;

	send_email($subject, $msg);
}