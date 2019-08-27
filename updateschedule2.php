<html>
<head>
<title>Update Schedule</title>
<style type="text/css">
.input{
	width:200px
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
<?php
include('connect.php');
$q="select * from schedule where day='$day'";
$res=mysql_query($q);

	while($row=mysql_fetch_array($res)){
		$did=$row['did'];
      		$time=$row['time'];

	}


?>
<form name="f" method="post" action="updateschedule3.php">
<table border="0" cellpadding="5" align="center" width="100%">
	<tr>
	<td>&nbsp;</td>
	<td><h2>Update Schedule</h2></td></tr>
	<tr>
	<td align="right">Doctor ID</td>
	<td>
		<select name="did" size="1">
		<?php
		print "<option value='$did'> $did </option>";
		include('connect.php');
		$q="select did from doctor";
		$res=mysql_query($q);
		while($row=mysql_fetch_array($res)){
			$did=$row['did'];
			print "<option value='$did'>$did</option>";
			}
		?>		
	</select></tr>
	<tr>
	<td align="right">Day</td>
	<td><input type="text" name="day" class="input" value="<?php print $day;?>" readonly/></tr>
	<tr>
	<td align="right">Time</td>
	<td><input type="text" name="time" class="input" value="<?php print $time;?>"/></tr>
	
	<td align="right">&nbsp;</td>
	<td><input type="submit" value="Update" class="submit"/>&nbsp;&nbsp;<input type="reset" value="Reset" class="submit"/></tr>
</table>
</form>
</body>
</html>