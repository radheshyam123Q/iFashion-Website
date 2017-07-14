<html>
<?php
	session_start();
	unset ($_SESSION["UserName"]);
	unset ($_SESSION["Password"]);

	echo'You have Logged Out';
	header('Refresh: 2; URL = login.html');
?>
</html>