<?php
use App\Mailer;

require(__DIR__ . '/../vendor/autoload.php');

$mailer = new Mailer([
	'host' => 'smtp.gmail.com',
	'username' => 'alexafincorp@gmail.com',
	'password' => 'alexa@123',
	'port' => '465',
	'encryption' => 'ssl'
]);

function parseTemplate($tpl, $data) {
    $htmlContents = file_get_contents(__DIR__ . '/../templates/' . $tpl);
    foreach($data as $key => $value) {
        $htmlContents = str_replace('{{ ' . $key . ' }}', $value, $htmlContents);
    }

    return $htmlContents;
}


$mailer->from('alexafincorp@gmail.com')
	->replyTo($_REQUEST['email'])
	->subject('Enquiry Mail')
	->html(parseTemplate('contact-mailbusiness.html', $_REQUEST))->send('inquiries@alexafincorp.com');

$mailer->from('alexafincorp@gmail.com')
	->replyTo('inquiries@alexafincorp.com')
	->subject('Enquiry Mail')
	->html(parseTemplate('contact-business.html', $_REQUEST))->send($_REQUEST['email']);



