<html>
<head>
<body style="background:url(bgimg.jpg);background-repeat:no-repeat">
</body>
</html>
<?php
extract($_POST);
if(isset($update)){
	include('updateschedule2.php');
}

if(isset($delete)){
	include('connect.php');
	$q="delete from schedule  where day='$day'";
	$res=mysql_query($q);
	if($res){
		include('updateschedule.php');
		print "<script language='javascript'>alert('Schedule deleted successfully');</script>";
	}
	
}
?>