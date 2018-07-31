<?php
require(__DIR__ . '/mailer.php');
if(!$_POST) {
	http_response_code(404);
	die();
}

try {
	$mailer->from('alexafincorp@gmail.com')
	->replyTo($_REQUEST['email'])
	->subject('Enquiry Mail')
	->html(parseTemplate('contact-mails.html', $_REQUEST))->send('inquiries@alexafincorp.com');

	$mailer->from('alexafincorp@gmail.com')
		->replyTo('inquiries@alexafincorp.com')
		->subject('Enquiry Mail')
		->html(parseTemplate('contact-users.html', $_REQUEST))->send($_REQUEST['email']);

	redirect_back(['message' => 'Your message has been submitted']);	

} catch(Exception $e) {
	redirect_back(['error' => 'Something went wrong']);	
}
