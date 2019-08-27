<?php
extract($_POST);
include('connect.php');
$q="select id from admin where id='$id' and pass='$pass'";
$res=mysql_query($q);
$n=@mysql_num_rows($res);
if($n>0){
	session_start();
	$_SESSION['admin']=$id;
	header("Location:home.php");
}
else{
	include('login.html');
	print "<script language='javascript'>alert('Invalid Login');</script>";
}
mysql_close($c);
?>