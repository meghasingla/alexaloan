<?php
require(__DIR__ . '/mailer.php');

if($_POST) {
	try {
		$mailer->from('alexafincorp@gmail.com')
			->replyTo($_REQUEST['email'])
			->subject('Enquiry Mail')
			->html(parseTemplate('contact-mail.html', $_REQUEST))->send('inquiries@alexafincorp.com');

		$mailer->from('alexafincorp@gmail.com')
			->replyTo('inquiries@alexafincorp.com')
			->subject('Enquiry Mail')
			->html(parseTemplate('contact-user.html', $_REQUEST))->send($_REQUEST['email']);
		
	} catch (\Exception $e) {
		redirect_back(['error' => 'Something went wrong. we couldn\t send email.']);
	}

	redirect_back(['message' => 'Your message has been submitted']);
} else {
	http_response_code(404);
}


