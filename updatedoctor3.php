<?php
extract($_POST);
include('connect.php');
$q="update doctor set dname='$dname',fname='$fname',mname='$mname',lname='$lname',gender='$gender',demail='$demail',state='$state',dist='$dist',hno='$hno',po='$po',ps='$ps',pin='$pin', specialization='$specialization' where did='$did'";
$res=mysql_query($q);
if($res){
	include('updatedoctor.php');
	print "<script language='javascript'>alert('Doctor updated successfully');</script>";
}

?>