
<?php

$q=$_GET["q"];


$file = fopen("handbags.txt","r");
$str = fgets($file);
fclose($file);

$arr=explode(";",$str);
$file=fopen("handbags.txt","w");



if($q=="h1")
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
else if($q=="h2")
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
else if($q=="h3")
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
else if($q=="h4")
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
else if($q=="h5")
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
else if($q=="h6")
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
else if($q=="h7")
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
else if($q=="h8")
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
else if($q=="h9")
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
else if($q=="h10")
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
else if($q=="h11")
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
else if($q=="h12")
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
else if($q=="h13")
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
else if($q=="h14")
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
else if($q=="h15")
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


$res=$arr[0].";".$arr[1].";".$arr[2].";".$arr[3].";".$arr[4].";".$arr[5].";".$arr[6].";".$arr[7].";".$arr[8].";".$arr[9].";".$arr[10].";".$arr[11].";".$arr[12].";".$arr[13].";".$arr[14];

fwrite($file,$res);
fclose($file);




?>
