
<?php

$q=$_GET["q"];


$file = fopen("shoes.txt","r");
$str = fgets($file);
fclose($file);

$arr=explode(";",$str);

if($q=="s1")
{
	echo $arr[0];
}
else if($q=="s2")
{
	echo $arr[1];
}
else if($q=="s3")
{
	echo $arr[2];
}
else if($q=="s4")
{
	echo $arr[3];
}
else if($q=="s5")
{
	echo $arr[4];
}
else if($q=="s6")
{
	echo $arr[5];
}
else if($q=="s7")
{
	echo $arr[6];
}
else if($q=="s8")
{
	echo $arr[7];
}
else if($q=="s9")
{
	echo $arr[8];
}
else if($q=="s10")
{
	echo $arr[9];
}
else if($q=="s11")
{
	echo $arr[10];
}
else if($q=="s12")
{
	echo $arr[11];
}
else if($q=="s13")
{
	echo $arr[12];
}
else if($q=="s14")
{
	echo $arr[13];

}
else if($q=="s15")
{
	echo $arr[14];
}
else if($q=="s16")
{
	echo $arr[15];
}
else if($q=="s17")
{
	echo $arr[16];
}
else if($q=="s18")
{
	echo $arr[17];
}
else if($q=="s19")
{
	echo $arr[18];
}
else if($q=="s20")
{
	echo $arr[19];
}
else if($q=="s21")
{
	echo $arr[20];
}



?>
