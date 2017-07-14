
<?php

$q=$_GET["q"];


$file = fopen("shoes.txt","r");
$str = fgets($file);
fclose($file);

$arr=explode(";",$str);
$file=fopen("shoes.txt","w");



if($q=="s1")
{
	if($arr[0]==0)
	{
		$arr[0]=0;
	}
	else
	{
		$arr[0]=$arr[0]-1;
	}
}
else if($q=="s2")
{
	if($arr[1]==0)
	{
		$arr[1]=0;
	}
	else
	{
		$arr[1]=$arr[1]-1;
	}
}
else if($q=="s3")
{
	if($arr[2]==0)
	{
		$arr[2]=0;
	}
	else
	{
		$arr[2]=$arr[2]-1;
	}
}
else if($q=="s4")
{
	if($arr[3]==0)
	{
		$arr[3]=0;
	}
	else
	{
		$arr[3]=$arr[3]-1;
	}
}
else if($q=="s5")
{
	if($arr[4]==0)
	{
		$arr[4]=0;
	}
	else
	{
		$arr[4]=$arr[4]-1;
	}
}
else if($q=="s6")
{
	if($arr[5]==0)
	{
		$arr[5]=0;
	}
	else
	{
		$arr[5]=$arr[5]-1;
	}
}
else if($q=="s7")
{
	if($arr[6]==0)
	{
		$arr[6]=0;
	}
	else
	{
		$arr[6]=$arr[6]-1;
	}
}
else if($q=="s8")
{
	if($arr[7]==0)
	{
		$arr[7]=0;
	}
	else
	{
		$arr[7]=$arr[7]-1;
	}
}
else if($q=="s9")
{
	if($arr[8]==0)
	{
		$arr[8]=0;
	}
	else
	{
		$arr[8]=$arr[8]-1;
	}
}
else if($q=="s10")
{
	if($arr[9]==0)
	{
		$arr[9]=0;
	}
	else
	{
		$arr[9]=$arr[9]-1;
	}
}
else if($q=="s11")
{
	if($arr[10]==0)
	{
		$arr[10]=0;
	}
	else
	{
		$arr[10]=$arr[10]-1;
	}
}
else if($q=="s12")
{
	if($arr[11]==0)
	{
		$arr[11]=0;
	}
	else
	{
		$arr[11]=$arr[11]-1;
	}
}
else if($q=="s13")
{
	if($arr[12]==0)
	{
		$arr[12]=0;
	}
	else
	{
		$arr[12]=$arr[12]-1;
	}
}
else if($q=="s14")
{
	if($arr[13]==0)
	{
		$arr[13]=0;
	}
	else
	{
		$arr[13]=$arr[13]-1;
	}

}
else if($q=="s15")
{
	if($arr[14]==0)
	{
		$arr[14]=0;
	}
	else
	{
		$arr[14]=$arr[14]-1;
	}
}
else if($q=="s16")
{
	if($arr[15]==0)
	{
		$arr[15]=0;
	}
	else
	{
		$arr[15]=$arr[15]-1;
	}
}
else if($q=="s17")
{
	if($arr[16]==0)
	{
		$arr[16]=0;
	}
	else
	{
		$arr[16]=$arr[16]-1;
	}
}
else if($q=="s18")
{
	if($arr[17]==0)
	{
		$arr[17]=0;
	}
	else
	{
		$arr[17]=$arr[17]-1;
	}
}
else if($q=="s19")
{
	if($arr[18]==0)
	{
		$arr[18]=0;
	}
	else
	{
		$arr[18]=$arr[18]-1;
	}
}
else if($q=="s20")
{
	if($arr[19]==0)
	{
		$arr[19]=0;
	}
	else
	{
		$arr[19]=$arr[19]-1;
	}
}
else if($q=="s21")
{
	if($arr[20]==0)
	{
		$arr[20]=0;
	}
	else
	{
		$arr[20]=$arr[20]-1;
	}
}

$res=$arr[0].";".$arr[1].";".$arr[2].";".$arr[3].";".$arr[4].";".$arr[5].";".$arr[6].";".$arr[7].";".$arr[8].";".$arr[9].";".$arr[10].";".$arr[11].";".$arr[12].";".$arr[13].";".$arr[14].";".$arr[15].";".$arr[16].";".$arr[17].";".$arr[18].";".$arr[19].";".$arr[20];

fwrite($file,$res);
fclose($file);




?>
