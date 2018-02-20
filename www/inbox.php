<?php
	session_start();
	if(!isset($_SESSION["uname"])){
		die("You do not belong here!");
	}
?>
<html>
	Inbox page!
</html>
