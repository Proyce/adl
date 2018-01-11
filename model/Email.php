<?php
class Email
{
	private function mailFormarter($from, $to, $subject, $message){
		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';
		$headers[] = 'To: '.$to;
		$headers[] = 'From: '.$from;

		if ( mail($to, $subject, $message, implode("\r\n", $headers)) ) {
			return true;
		}

		return false;
	}

	public function __construct ($postFrom, $postTo, $postName, $postSubject = '', $postMessage){
		if (
			!empty($postFrom) &&
			!empty($postTo) &&
			!empty($postName) &&
			!empty($postMessage)
		) {
			$from = sanitize($postFrom);
			$to = sanitize($postTo);
			$subject = sanitize($postSubject);
			$message =  '<strong>Name: ' . sanitize($postName) . '</strong><br />' . sanitize($postMessage);

			if ($this->mailFormarter($from, $to, $subject, $message)) {
				return true;
			}
		}
				
		return false;
	}
}