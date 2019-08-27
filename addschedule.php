<html>
<head>
<title>Add Schedule</title>
<style type="text/css">
.input{
	width:200px;
	padding:5px;
	border:none;
	border-radius:5px;
	background-color:#e5e5e5;
	color:#000;
}
.submit{
	width:80px;
	padding:5px;
	border:none;
	border-radius:4px;
	background-color:#008dde;
	color:#fff;
	font-weight:bold;
}
html { 
  background: url(content.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.submit:hover{
	background-color:green;
}
</style>
</head>
<body>
<form name="f" method="post" action="addschedule2.php">
<table border="0" cellpadding="10" align="center" width="100%">
	<tr>
	<td>&nbsp;</td>
	<td><h2>Add Schedule</h2></td></tr>
	<tr>
	<td align="right">Doctor Id</td>
	<td>
	<select name="did" size="1">
		<?php
		include('connect.php');
		$q="select did from doctor";
		$res=mysql_query($q);
		while($row=mysql_fetch_array($res)){
			$did=$row['did'];
			print "<option value='$did'>$did</option>";
			}
		?>		
	</select>
	</td></tr>
	<tr>
	<td align="right">Day</td>
	<td><input type="text" name="day" class="input"/></tr>
	<tr>
	<td align="right">Time</td>
	<td><input type="text" name="time" class="input"/></tr>
	<tr>
	<td align="right">&nbsp;</td>
	<td><input type="submit" value="Submit" class="submit"/>&nbsp;&nbsp;<input type="reset" value="Reset" class="submit"/></tr>
</table>
</form>
</body>
</html>