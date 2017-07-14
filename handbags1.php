
<?php

$q=$_GET["q"];


$file = fopen("handbags.txt","r");
$str = fgets($file);
fclose($file);

$arr=explode(";",$str);

if($q=="h1")
{
	echo $arr[0];
}
else if($q=="h2")
{
	echo $arr[1];
}
else if($q=="h3")
{
	echo $arr[2];
}
else if($q=="h4")
{
	echo $arr[3];
}
else if($q=="h5")
{
	echo $arr[4];
}
else if($q=="h6")
{
	echo $arr[5];
}
else if($q=="h7")
{
	echo $arr[6];
}
else if($q=="h8")
{
	echo $arr[7];
}
else if($q=="h9")
{
	echo $arr[8];
}
else if($q=="h10")
{
	echo $arr[9];
}
else if($q=="h11")
{
	echo $arr[10];
}
else if($q=="h12")
{
	echo $arr[11];
}
else if($q=="h13")
{
	echo $arr[12];
}
else if($q=="h14")
{
	echo $arr[13];

}
else if($q=="h15")
{
	echo $arr[14];
}




?>
