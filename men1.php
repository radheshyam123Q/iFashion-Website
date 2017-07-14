
<?php

$q=$_GET["q"];


$file = fopen("men.txt","r");
$str = fgets($file);
fclose($file);

$arr=explode(";",$str);

if($q=="m1")
{
	echo $arr[0];
}
else if($q=="m2")
{
	echo $arr[1];
}
else if($q=="m3")
{
	echo $arr[2];
}
else if($q=="m4")
{
	echo $arr[3];
}
else if($q=="m5")
{
	echo $arr[4];
}
else if($q=="m6")
{
	echo $arr[5];
}
else if($q=="m7")
{
	echo $arr[6];
}
else if($q=="m8")
{
	echo $arr[7];
}
else if($q=="m9")
{
	echo $arr[8];
}
else if($q=="m10")
{
	echo $arr[9];
}
else if($q=="m11")
{
	echo $arr[10];
}
else if($q=="m12")
{
	echo $arr[11];
}
else if($q=="m13")
{
	echo $arr[12];
}
else if($q=="m14")
{
	echo $arr[13];

}
else if($q=="m15")
{
	echo $arr[14];
}
else if($q=="m16")
{
	echo $arr[15];
}
else if($q=="m17")
{
	echo $arr[16];
}
else if($q=="m18")
{
	echo $arr[17];
}
else if($q=="m19")
{
	echo $arr[18];
}
else if($q=="m20")
{
	echo $arr[19];
}
else if($q=="m21")
{
	echo $arr[20];
}
else if($q=="m22")
{
	echo $arr[21];
}
else if($q=="m23")
{
	echo $arr[22];
}
else if($q=="m24")
{
	echo $arr[23];
}
else if($q=="m25")
{
	echo $arr[24];
}
else if($q=="m26")
{
	echo $arr[25];
}
else if($q=="m27")
{
	echo $arr[26];
}
else if($q=="m28")
{
	echo $arr[27];
}
else if($q=="m29")
{
	echo $arr[28];
}
else if($q=="m30")
{
	echo $arr[29];
}



?>
