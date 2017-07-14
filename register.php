<?php
//$fname=$_POST('Name');
//echo $fname;
//$extract(_POST);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion";
$conn = mysqli_connect($servername, $username, $password, $dbname);

   if (!$conn) 
   {
    die("Connection failed: " . mysql_connect_error());
    }

/*function UniqueRandomNumbersWithRange($min,$max,$quantity)
{
	$num=range($min,$max);
	shuffle($num);
}

$cid= UniqueRandomNumbersWithRange(0,999,1);

$CID="STDB666768"+ $cid;*/



$cid=rand(10,999);
$userName = isset($_POST[ "UserName" ]) ? $_POST[ "UserName" ] : "";
$passWord = isset($_POST[ "password" ]) ? $_POST[ "password" ] : "";
$PN = isset($_POST[ "phno" ]) ? $_POST[ "phno" ] : "";
$ED = isset($_POST[ "email" ]) ? $_POST[ "email" ] : "";
$city = isset($_POST[ "city" ]) ? $_POST[ "city" ] : "";
$zipcode = isset($_POST[ "zip" ]) ? $_POST[ "zip" ] : "";

if(isset($_GET["u"])){
  $UN=$_GET["u"];
  echo $UN;
  echo "<br>";
}


$sql = "INSERT INTO customers VALUES ('$cid','$userName','$passWord','$PN','$ED','$city','$zipcode')";

if (mysqli_query($conn, $sql)) {
    $_SESSION['CustomerId'] = $cid;
    //echo $CID;
    header("Location:sale.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
