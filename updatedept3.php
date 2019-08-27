<?php
extract($_POST);
include('connect.php');
$q="update department set floor='$floor', email='$email' where dname='$dname'";
$res=mysql_query($q);
if($res){
	include('updatedept.php');
	print "<script language='javascript'>alert('Department updated successfully');</script>";
}

?>