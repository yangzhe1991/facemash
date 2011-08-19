<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta http-equiv="refresh" content="1;url=./facemash.php">
<title>yangzhe1991's Facemash 评选最佳校内头像~</title>
</head>
<center>
<?php
$left=$_POST['photo1'];
$right=$_POST['photo2'];
$winner=$_POST['choice'];
$con = mysql_connect("localhost","username","passwd");
if (!$con)
	  {
		    die('Could not connect: ' . mysql_error());
			  }
mysql_select_db("yangzhe_facemash", $con);

$result=mysql_query("select * from people order by time");
$bool=false;
if (!$result)
	echo mysql_error();
for($i=1;$i<=5;$i++)
{
	$one=mysql_fetch_array($result);
	if($one['id']==$left)
		$bool=true;
}
///////////////////////////
if($bool)
{
$result=mysql_query("select * from people where id='{$left}'");
if (!$result)
	echo mysql_error();
$one=mysql_fetch_array($result);
$Ra=$one['point'];
$ta=$one['time']+1;
$result=mysql_query("select * from people where id='{$right}'");
if (!$result)
	echo mysql_error();
$one=mysql_fetch_array($result);
$Rb=$one['point'];
$tb=$one['time']+1;
$EA=1/(1+pow(10,($Rb-$Ra)/400));
$EB=1-$EA;

if($left==$winner)
{
	$Sa=1;$Sb=0;
}
else {$Sa=0;$Sb=1;}
$k=40;
$Ra_=$Ra+$k*($Sa-$EA);
$Rb_=$Rb+$k*($Sb-$EB);
mysql_query("update people set point='{$Ra_}' where id='{$left}'");
mysql_query("update people set time='{$ta}' where id='{$left}'");
mysql_query("update people set point='{$Rb_}' where id='{$right}'");
mysql_query("update people set time='{$tb}' where id='{$right}'");
$id=mysql_num_rows(mysql_query("select * from records"))+1;
echo $id;
$d=date('Ymd');
$t=date('Gis');
$q=mysql_query("insert into records(id,d,t,p1,p2,winner,l,r) 
	values
	($id,$d,$t,$Ra,$Rb,$winner,$left,$right)
	");
if(!$q)
	echo mysql_error();
unset($id);
}
mysql_close($con);
?>

已记录，正在跳转
</center>
</html>
