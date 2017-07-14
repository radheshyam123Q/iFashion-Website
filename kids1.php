
<?php

$q=$_GET["q"];


$file = fopen("kids.txt","r");
$str = fgets($file);
fclose($file);

$arr=explode(";",$str);

if($q=="k1")
{
	echo $arr[0];
}
else if($q=="k2")
{
	echo $arr[1];
}
else if($q=="k3")
{
	echo $arr[2];
}
else if($q=="k4")
{
	echo $arr[3];
}
else if($q=="k5")
{
	echo $arr[4];
}
else if($q=="k6")
{
	echo $arr[5];
}
else if($q=="k7")
{
	echo $arr[6];
}
else if($q=="k8")
{
	echo $arr[7];
}
else if($q=="k9")
{
	echo $arr[8];
}
else if($q=="k10")
{
	echo $arr[9];
}
else if($q=="k11")
{
	echo $arr[10];
}
else if($q=="k12")
{
	echo $arr[11];
}
else if($q=="k13")
{
	echo $arr[12];
}
else if($q=="k14")
{
	echo $arr[13];

}
else if($q=="k15")
{
	echo $arr[14];
}
else if($q=="k16")
{
	echo $arr[15];
}
else if($q=="k17")
{
	echo $arr[16];
}
else if($q=="k18")
{
	echo $arr[17];
}




?>
