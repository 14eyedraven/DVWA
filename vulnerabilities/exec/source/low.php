<?php

if( isset( $_POST[ 'Submit' ]  ) ) {
	// Get input
	$target = $_REQUEST[ 'ip' ];

	if (preg_match("/ ( 25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]? ) \. ( 25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]? ) \.
	( 25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]? ) \. ( 25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]? ) /'", $target))
	{
		// Determine OS and execute the ping command.
		if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
			// Windows
			$cmd = shell_exec( 'ping  ' . $target );
		}
		else {
			// *nix
			$cmd = shell_exec( 'ping  -c 4 ' . $target );
		}
	}

	// Feedback for the end user
	$html .= "<pre>{$cmd}</pre>";
}

?>
