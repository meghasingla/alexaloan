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
    	if($key === 'monthlyincome') {
    		$value = number_format($value, 2);
    	}

        $htmlContents = str_replace('{{ ' . $key . ' }}', $value, $htmlContents);
    }

    return $htmlContents;
}

function redirect_back($query) {
	$path = '/';
	if(isset($_SERVER['HTTP_REFERER'])) {
		$path = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
	}

	header('LOCATION: ' . $path . '?' . http_build_query( $query ));
	die();
}