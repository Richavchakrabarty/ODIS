<html>
<head>
<title>Add Department</title>
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
<form name="f" method="post" action="adddept2.php">
<table border="0" cellpadding="10" align="center" width="100%">
	<tr>
	<td>&nbsp;</td>
	<td><h2>Add Department</h2></td></tr>
	<tr>
	<td align="right">Department Name</td>
	<td><input type="text" name="dname" class="input"/></tr>
	<tr>
	<td align="right">Floor</td>
	<td><input type="text" name="floor" class="input"/></tr>
	<tr>
	<td align="right">Email Id</td>
	<td><input type="text" name="email" class="input"/></tr>
	<tr>
	<td align="right">&nbsp;</td>
	<td><input type="submit" value="Submit" class="submit"/>&nbsp;&nbsp;<input type="reset" value="Reset" class="submit"/></tr>
</table>
</form>
</body>
</html>