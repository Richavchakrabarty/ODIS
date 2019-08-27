<html>
<head>
<title>Add Doctor</title>
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
<form name="f" method="post" action="adddoctor2.php">
<table border="0" cellpadding="5" align="center" width="100%">
	<tr>
	<td>&nbsp;</td>
	<td><h2>Add Doctor</h2></td></tr>
	<tr>
	<td align="right">Doctor ID</td>
	<td><input type="text" name="did" class="input"/></tr>
	<tr>
	<td align="right">Department Name</td>
	<td>
	<select name="dname" size="1">
		<?php
		include('connect.php');
		$q="select dname from department";
		$res=mysql_query($q);
		while($row=mysql_fetch_array($res)){
			$dname=$row['dname'];
			print "<option value='$dname'>$dname</option>";
			}
		?>		
	</select>
	</td></tr>
	<tr>
	<td align="right">First Name</td>
	<td><input type="text" name="fname" class="input"/></tr>
	<tr>
	<td align="right">Middle Name</td>
	<td><input type="text" name="mname" class="input"/></tr>
        <tr> 
	<td align="right">Last Name</td>
	<td><input type="text" name="lname" class="input"/></tr>
      	<tr>
	<td align="right">Gender</td>
	<td><input type="text" name="gender" class="input"/></tr>
        <tr>
	<td align="right">Email</td>
	<td><input type="text" name="demail" class="input"/></tr>
        <tr>
	<td align="right">State</td>
	<td><input type="text" name="state" class="input"/></tr>
        <tr>
	<td align="right">Dist</td>
	<td><input type="text" name="dist" class="input"/></tr>
        <tr>	
        <td align="right">House No.</td>
	<td><input type="text" name="hno" class="input"/></tr>
        <tr>
	<td align="right">Post Office</td>
	<td><input type="text" name="po" class="input"/></tr>
        <tr>
	<td align="right">Police Station</td>
	<td><input type="text" name="ps" class="input"/></tr>
        <tr>
	<td align="right">PIN</td>
	<td><input type="text" name="pin" class="input"/></tr>
        <td align="right">Specialization</td>
	<td><input type="text" name="specialization" class="input"/></tr>
        <tr>	
        <td align="right">&nbsp;</td>
	<td><input type="submit" value="Submit" class="submit"/>&nbsp;&nbsp;<input type="reset" value="Reset" class="submit"/></tr>
</table>
</form>
</body>
</html>