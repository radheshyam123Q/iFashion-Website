<html>
<head>
<?php
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$phone = $_POST["userPhone"];
	$address = $_POST["address"];
	$bank = $_POST["Bank"];
	$account = $_POST["accNo"];
	$password = $_POST["passWord"];
	$arr = $name.";".$email.";".$phone.";".$address.";".$bank.";".$account.";".$password;
	$file = fopen("user.txt","a+");
	fwrite($file,$arr);
	fclose($file);
?>
	<script type="text/javascript">
	function wait()
	{
		setTimeout("sub()",2000);
	}
	function sub()
	{ 
		window.location="final.html";

	}
	</script>
</head>
<body onload="wait()">
<h2> KEEP SHOPPING </h2>
</body>
