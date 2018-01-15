<?php

class Email
{
	private function isEmailFormat($from, $to, $subject, $message){

		$headers[] = 'MIME-Version: 1.0';
		$headers[] = 'Content-type: text/html; charset=iso-8859-1';
		$headers[] = 'From: ' . $from;
		$headers[] = 'Reply-To: ' . $from;

		if ( mail($to, $subject, $message, implode("\r\n", $headers)) ) {
			return true;
		}

		return false;
	}

	private function isBadString($string){

		$bad_strings = array(
			'content-type:', 
			'mime-version:', 
			'multipart\/mixed',
			'Content-Transfer-Encoding:', 
			'bcc:', 
			'cc:', 
			'to:',
			'from:',
		);

		foreach($bad_strings as $bad_string) {
			
			preg_match('/' . $bad_string . '/', strtolower($string), $matches);

			if ( count($matches) > 0 ) {

				return true;

			}

		}

		return false;
	}

	public function sendMail($postFrom, $postTo, $postName, $postSubject = '', $postMessage){

		if ($_SERVER['REQUEST_METHOD'] != 'POST'){
			return false;
		}

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			// Hidden/reverse captcha field for bots
			if (!empty($_POST['gotcha'])) die();


			// Check for duplicate data (usually from bots)
			$duplicateData = 0;
			foreach ($_POST as $key => $val){
				if (stristr($val, 'http:')) $duplicateData++;
				if (stristr($val, 'https:')) $duplicateData++;
				if (stristr($val, '[url=')) $duplicateData++;
				if (stristr($val, '[url]')) $duplicateData++;
			}
			if ($duplicateData > 1) die();


			// Check bad strings
			foreach ($_POST as $key => $val) {
				if ( $this->isBadString($val) ) {
					
					return false;

				}
			}


			// Check for newlines
			foreach ($_POST as $key => $val){
				if (preg_match("/(%0A|%0D|\\n+|\\r+)/i", $val) != 0) {
					return false;
				}
			}


			// Check required fields
			if(
				!empty($postFrom) &&
				!empty($postTo) &&
				!empty($postName) &&
				!empty($postMessage)
			) {
				// Validate email address
				if(
					!filter_var($postFrom, FILTER_VALIDATE_EMAIL) || 
					!filter_var($postTo, FILTER_VALIDATE_EMAIL)
				){
					return false;
				}

				$postFrom = sanitize($postFrom);
				$postTo = sanitize($postTo);
				$postSubject = sanitize($postSubject);
				$postMessage =  '<strong>Sender Name: ' . sanitize($postName) . '</strong><br />' . sanitize($postMessage);

				if ($this->isEmailFormat($postFrom, $postTo, $postSubject, $postMessage)) {
					return true;
				}

			}else{
				echo 'Please fill in all the required fields';
			}
		}
					
		return false;
	}
}