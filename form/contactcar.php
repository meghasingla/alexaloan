<?php
use App\Mailer;

require(__DIR__ . '/../vendor/autoload.php');

$mailer = new Mailer([
	'host' => 'smtp.gmail.com',
	'username' => 'enquiry.crologic@gmail.com',
	'password' => 'Passw0rd@123',
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


/*$mailer->from('enquiry.crologic@gmail.com')
	->replyTo($_REQUEST['email'])
	->subject('Enquiry Mail')
	->html(parseTemplate('contact-mail.html', $_REQUEST))->send('info@crologic.net');*/

$mailer->from('enquiry.crologic@gmail.com')
	->replyTo('info@crologic.net')
	->subject('Enquiry Mail')
	->html(parseTemplate('contact-car.html', $_REQUEST))->send($_REQUEST['email']);



