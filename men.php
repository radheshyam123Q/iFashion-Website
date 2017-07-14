
<?php

$q=$_GET["q"];


$file = fopen("men.txt","r");
$str = fgets($file);
fclose($file);

$arr=explode(";",$str);
$file=fopen("men.txt","w");



if($q=="m1")
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
else if($q=="m2")
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
else if($q=="m3")
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
else if($q=="m4")
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
else if($q=="m5")
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
else if($q=="m6")
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
else if($q=="m7")
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
else if($q=="m8")
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
else if($q=="m9")
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
else if($q=="m10")
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
else if($q=="m11")
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
else if($q=="m12")
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
else if($q=="m13")
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
else if($q=="m14")
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
else if($q=="m15")
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
else if($q=="m16")
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
else if($q=="m17")
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
else if($q=="m18")
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
else if($q=="m19")
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
else if($q=="m20")
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
else if($q=="m21")
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
else if($q=="m22")
{
	if($arr[21]==0)
	{
		$arr[21]=0;
	}
	else
	{
		$arr[21]=$arr[21]-1;
	}
}
else if($q=="m22")
{
	if($arr[21]==0)
	{
		$arr[21]=0;
	}
	else
	{
		$arr[21]=$arr[21]-1;
	}
}
else if($q=="m23")
{
	if($arr[22]==0)
	{
		$arr[22]=0;
	}
	else
	{
		$arr[22]=$arr[22]-1;
	}
}
else if($q=="m24")
{
	if($arr[23]==0)
	{
		$arr[23]=0;
	}
	else
	{
		$arr[23]=$arr[23]-1;
	}
}
else if($q=="m25")
{
	if($arr[24]==0)
	{
		$arr[24]=0;
	}
	else
	{
		$arr[24]=$arr[24]-1;
	}
}
else if($q=="m26")
{
	if($arr[25]==0)
	{
		$arr[25]=0;
	}
	else
	{
		$arr[25]=$arr[25]-1;
	}
}
else if($q=="m27")
{
	if($arr[26]==0)
	{
		$arr[26]=0;
	}
	else
	{
		$arr[26]=$arr[26]-1;
	}
}
else if($q=="m28")
{
	if($arr[27]==0)
	{
		$arr[27]=0;
	}
	else
	{
		$arr[27]=$arr[27]-1;
	}
}
else if($q=="m29")
{
	if($arr[28]==0)
	{
		$arr[28]=0;
	}
	else
	{
		$arr[28]=$arr[28]-1;
	}
}
else if($q=="m30")
{
	if($arr[29]==0)
	{
		$arr[29]=0;
	}
	else
	{
		$arr[29]=$arr[29]-1;
	}
}



$res=$arr[0].";".$arr[1].";".$arr[2].";".$arr[3].";".$arr[4].";".$arr[5].";".$arr[6].";".$arr[7].";".$arr[8].";".$arr[9].";".$arr[10].";".$arr[11].";".$arr[12].";".$arr[13].";".$arr[14].";".$arr[15].";".$arr[16].";".$arr[17].";".$arr[18].";".$arr[19].";".$arr[20].";".$arr[21].";".$arr[22].";".$arr[23].";".$arr[24].";".$arr[25].";".$arr[26].";".$arr[27].";".$arr[28].";".$arr[29];

fwrite($file,$res);
fclose($file);




?>
