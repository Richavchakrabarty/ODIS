<html>
<head>
<body style="background:url(bgimg.jpg);background-repeat:no-repeat">
</body>
</html>
<?php
extract($_POST);
if(isset($update)){
	include('updatedoctor2.php');
}

if(isset($delete)){
	include('connect.php');
	$q="delete from doctor  where did='$did'";
	$res=mysql_query($q);
	if($res){
		include('updatedoctor.php');
		print "<script language='javascript'>alert('Doctor deleted successfully');</script>";
	}
	
}
?>