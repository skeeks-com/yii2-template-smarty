<?php
/**
 * @version		v1.0.0
 * @author		Dorin Grigoras [www.stepofweb.com]
 * @date		Thursday, May 21, 2015
**/	date_default_timezone_set('Etc/UTC');
	@ini_set('display_errors', 0);
	@ini_set('track_errors', 0);

	$array['email']	= isset($_REQUEST['email']) ? ckmail($_REQUEST['email']) : false;

	if($array['email'] !== false) {

		$fh = fopen('_newsletter.txt', 'a+');
		fwrite($fh, "\r\n" . $array['email']);
		fclose($fh);

		unset($fh, $array);
	}

/** ********************************** 
 @CHECK EMAIL
/** ******************************* **/
	function ckmail($email) {
		$email = trim(strtolower($email));
		if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/',trim($email))){
			return $email;
		} else { return false; }
	}
?>