<?php
	session_start();
	if(isset($_SESSION))
	print_r($_SESSION);
	else
		echo "error";

?>