<?php
extract($_POST);
include('connect.php');
$q="update schedule set did='$did',time='$time' where day='$day'";
$res=mysql_query($q);
if($res){
	include('updateschedule.php');
	print "<script language='javascript'>alert('Schedule updated successfully');</script>";
}

?>