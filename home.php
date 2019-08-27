<?php
//check session variable name for security
session_start();
if(!isset($_SESSION['admin'])){
	include('index.html');
	print "<script language='javascript'>alert('Your session does not exist...');</script>";
}
?>
<html>
<head>
<title>Online Doctor Information System</title>
</head>
<frameset cols="20%,*">
	<frame name="link" src="adminmenu.html"/>
	<frame name="content" src="content.html"/>
</frameset>
</html>