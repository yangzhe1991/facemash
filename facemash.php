<html>
 <head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>yangzhe1991's Facemash 评选最佳校内头像~</title>

<center>
看完《社交网络》，蛋疼难忍，于是自学了一下PHP，做了一个简单的facemash……<br/>
因为合法搞到女生（女人）的照片尤其是素颜照片很难，于是决定评比本人校内好友之头像……出于种种目的，不分男女，平等评比。<br/>
参与很容易，只需要点击你觉得更好的那个头像即可。至于何为好，标准在于自己。<br/>
投投票之后会自动转回来，可以继续投，不限制次数。因为排名需要大数据量才更准，欢迎多玩一会~~<br/>
第一阶段结果公布：<a href='./facemashresult.htm'>这里</a>截止时间为北京时间3月10日14：40<br/>
投票已结束，稍后公布最终成绩<br/> 
<!--
<script type='text/javascript'>
function voteLeft()
{
	vote.choice.value=vote.photo1.value;
	vote.submit();
}
function voteRight()
{
	vote.choice.value=vote.photo2.value;
	vote.submit();
}

</script>
<?php
/*
$con = mysql_connect("localhost","username","passwd");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("yangzhe_facemash", $con);
$result=mysql_query("select * from people order by time");
if(!$result)
	echo mysql_error();
$one=mysql_fetch_array($result);
$photo1=$one['id'];
$pp1=$one['point']-30;
$pp2=$one['point']+30;
$result=mysql_query("select * from people where point between '{$pp1}' and '{$pp2}'");
if(!$result)
	echo mysql_error();
$num=mysql_num_rows($result);
if($num<=3)
{
	$result=mysql_query("select * from people");
	$num=mysql_num_rows($result);
}
$x=rand(1,$num);
for($i=1;$i<=$x;$i++)
{
	$one=mysql_fetch_array($result);
}

$photo2=$one['id'];
mysql_close($con);
echo '<img src=./photo/',$photo1,'.jpg onclick=\'voteLeft();\'></img>';
echo 'OR';
echo '<img src=./photo/',$photo2,'.jpg onclick=\'voteRight();\'></img>';
 */
?>
<form name='vote' action="vote.php" method="post">
<input type="hidden" name="photo1" value='<?php /*echo $photo1;*/ ?>'/>
<input type="hidden" name="photo2" value='<?php/* echo $photo2; */?>'/>
<input type="hidden" name="choice" />
</form>
-->
</center>
</html>
