<html>
<head>
<body style="background:url(bgimg.jpg);background-repeat:no-repeat">
</body>
</html>
<?php
extract($_POST);
if(isset($update)){
	include('updatedept2.php');
}

if(isset($delete)){
	include('connect.php');
	$q="delete from department  where dname='$dname'";
	$res=mysql_query($q);
	if($res){
		include('updatedept.php');
		print "<script language='javascript'>alert('Department deleted successfully');</script>";
	}
	
}
?>