<html>
<head>
<body style="background:url(content.jpg);background-repeat:no-repeat">
</body>
</html>
<script language="javascript">
	function mess(){
		var x=confirm("Are you sure to delete this record? Yes/No");
		if(x==true)
			return true;
		else
			return false;
	}
</script>
<?php
include('connect.php');
$q="select * from department";
$res=mysql_query($q);
$n=@mysql_num_rows($res);
if($n>0){
	print "<table border='1' width='100%' align='center' cellpadding='5' style='border-collapse:collapse'>
		<tr><th colspan='4'><h2>Department Detail</h2></th></tr>
		<tr><th>Department Name</th><th>Floor</th><th>Email Id</th><th>Click Update/Delete links to update a record</th></tr>";
	while($row=mysql_fetch_array($res)){
		$dname=$row['dname'];
		$floor=$row['floor'];
		$email=$row['email'];
		
		print "<form name='f' method='post' action='deletedept.php'>
		<input type='hidden' name='dname' value='$dname'/>
		<tr align='center'><td>$dname</td><td>$floor</td><td>$email</td>
		<td>
		<input type='submit' name='update' value='Update'/>&nbsp;&nbsp;
		<input type='submit' name='delete' value='Delete' onclick='return mess()'/>
		</td></tr></form>";
	}
}
else{
	print "No record available...";
}
mysql_close($c);
?>