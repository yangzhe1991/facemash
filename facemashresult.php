<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<?php

$con = mysql_connect("localhost","username","passwd");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("yangzhe_facemash", $con);
$result=mysql_query("select * from people order by point desc");
if(!$result)
	echo mysql_error();
for($i=1;$i<=100;$i++)
{
	$one=mysql_fetch_array($result);
	echo 'No.',$i,'<img src=./photo/',$one['id'],'.jpg></img>  point=',$one['point'],'time=',$one['time'],'<br/>';
	
}

$photo2=$one['id'];
mysql_close($con);


?>
</html>
