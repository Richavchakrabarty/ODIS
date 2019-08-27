<html>
<head>
<body style="background:url(content.jpg);background-repeat:no-repeat">
</body>
</html>
<?php
extract($_POST);
include('connect.php');
$q="insert into doctor values('$did','$dname','$fname','$mname','$lname','$gender','$demail','$state','$dist','$hno','$po','$ps','$pin','$specialization')";
$res=mysql_query($q);
if($res){
	print "Doctor information added successfully";
}
else{
	print mysql_error();
}
mysql_close($c);
?>