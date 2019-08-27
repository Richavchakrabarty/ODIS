<html>
<head>
<body style="background:url(content.jpg);background-repeat:no-repeat">
</body>
</html>
<?php
extract($_POST);
include('connect.php');
$q="insert into schedule values('$did','$day','$time')";
$res=mysql_query($q);
if($res){
	print "Schedule added successfully";
}
else{
	print mysql_error();
}
mysql_close($c);
?>