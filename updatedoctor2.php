<html>
<head>
<title>Update Doctor</title>
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
$q="select * from doctor where did='$did'";
$res=mysql_query($q);

	while($row=mysql_fetch_array($res)){
		$dname=$row['dname'];
      		$fname=$row['fname'];
      		$mname=$row['mname'];
      		$lname=$row['lname'];
      		$gender=$row['gender'];
      		$demail=$row['demail'];
      		$state=$row['state'];
      		$dist=$row['dist'];
      		$hno=$row['hno'];
      		$po=$row['po'];
      		$ps=$row['ps'];
      		$pin=$row['pin'];
      		$specialization=$row['specialization'];
	}


?>
<form name="f" method="post" action="updatedoctor3.php">
<table border="0" cellpadding="5" align="center" width="100%">
	<tr>
	<td>&nbsp;</td>
	<td><h2>Update Doctor</h2></td></tr>
	<tr>
	<td align="right">Doctor ID</td>
	<td><input type="text" name="did" class="input" value="<?php print $did;?>" readonly/></tr>
	<tr>
	<td align="right">Department Name</td>
	<td>
		<select name="dname" size="1">
		<?php
		print "<option value='$dname'> $dname </option>";
		include('connect.php');
		$q="select dname from department";
		$res=mysql_query($q);
		while($row=mysql_fetch_array($res)){
			$dname=$row['dname'];
			print "<option value='$dname'>$dname</option>";
			}
		?>		
	</select>
	
	</tr>
	<tr>
	<td align="right">First Name</td>
	<td><input type="text" name="fname" class="input" value="<?php print $fname;?>"/></tr>
	<tr>
	<td align="right">Middle Name</td>
	<td><input type="text" name="mname" class="input" value="<?php print $mname;?>"/></tr>
        <tr> 
	<td align="right">Last Name</td>
	<td><input type="text" name="lname" class="input" value="<?php print $lname;?>"/></tr>
      	<tr>
	<td align="right">Gender</td>
	<td><input type="text" name="gender" class="input" value="<?php print $gender;?>"/></tr>
        <tr>
	<td align="right">Email</td>
	<td><input type="text" name="demail" class="input" value="<?php print $demail;?>"/></tr>
        <tr>
	<td align="right">State</td>
	<td><input type="text" name="state" class="input" value="<?php print $state;?>"/></tr>
        <tr>
	<td align="right">Dist.</td>
	<td><input type="text" name="dist" class="input" value="<?php print $dist;?>"/></tr>
        <tr>	
        <td align="right">House No.</td>
	<td><input type="text" name="hno" class="input" value="<?php print $hno;?>"/></tr>
        <tr>
	<td align="right">Post Office</td>
	<td><input type="text" name="po" class="input" value="<?php print $po;?>"/></tr>
        <tr>
	<td align="right">Police Station</td>
	<td><input type="text" name="ps" class="input" value="<?php print $ps;?>"/></tr>
        <tr>
	<td align="right">PIN</td>
	<td><input type="text" name="pin" class="input" value="<?php print $pin;?>"/></tr>
	<td align="right">Specialization</td>
	<td><input type="text" name="specialization" class="input" value="<?php print $specialization;?>"/></tr>
	<td align="right">&nbsp;</td>
	<td><input type="submit" value="Update" class="submit"/>&nbsp;&nbsp;<input type="reset" value="Reset" class="submit"/></tr>
</table>
</form>
</body>
</html>