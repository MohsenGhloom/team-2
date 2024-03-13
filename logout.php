<?php
	// this will distroy the session code and logout the admin or user 
	session_unset();
	session_destroy();
	// redirecting to main page
	header("Location: index.php");
?>