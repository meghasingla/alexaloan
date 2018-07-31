<?php
namespace App;
/**
* 
*/
use Swift_SmtpTransport;
use Swift_Attachment;
use Swift_Mailer;
use Swift_Message;
class Mailer
{
	protected static $instance;
	protected $transport;
	protected $mailer;
	protected $message;
	function __construct($configs)
	{
		$this->transport = (new Swift_SmtpTransport(
			$configs['host'],
			$configs['port'],
			$configs['encryption']))
		  ->setUsername($configs['username'])
		  ->setPassword($configs['password'])
		  ;
		$this->mailer = new Swift_Mailer($this->transport);
		$this->message = new Swift_Message();
	}

	public function from($from) {
		$this->message->setFrom($from);
		return $this;
	}

	public function replyTo()
	{
		$this->message->setReplyTo(func_get_args());
		return $this;
	}

	public function send($to) {
		$this->message->setTo($to);
		$result = $this->mailer->send($this->message);
	}
	public function attachFile($filename, $name) {
		$this->message->attach(Swift_Attachment::fromPath($filename)->setFilename($name));
	}
	public function subject($subject) {
		$this->message->setSubject($subject);
		return $this;
	}
	public function html($html, $subject = null) {
		if($subject) {
			$this->message->setSubject($subject);
		}
		$this->message->setBody($html, 'text/html');
	  	return $this;
	}
	public function text() {
		if($subject) {
			$this->message->setSubject($subject);
		}
		$this->message->setBody($html);
	  	return $this;
	}
	public function attach($data, $name, $mime = 'application/pdf') {
		$attachment = new Swift_Attachment($data, $name, $mime);
		$this->message->attach($attachment);
		return $this;
	}
	
	public static function instance($configs = []) {
		return new static($configs);
	}
}
