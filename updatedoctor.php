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
$q="select * from doctor";
$res=mysql_query($q);
$n=@mysql_num_rows($res);
if($n>0){
	print "<table border='1' width='100%' align='center' cellpadding='5' style='border-collapse:collapse'>
		<tr><th colspan='13'>Doctor Detail</th></tr>
		<tr><th>Doctor ID</th><th>Department Name</th><th>Name</th><th>Gender</th><th>Email</th><th>State</th><th>Dist.</th><th>House No.</th><th>Post Office</th><th>Police Station</th><th>PIN</th><th>Specialization</th><th>Click Update/Delete link to update a record</th></tr>";
	while($row=mysql_fetch_array($res)){
      		$did=$row['did'];
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
		$name=ucwords($fname." ".$mname." ".$lname);

		print "<form name='f' method='post' action='deletedoctor.php'>
		<input type='hidden' name='did' value='$did'/>
		<tr align='center'><td>$did</td><td>$dname</td><td>$name</td><td>$gender</td><td>$demail</td><td>$state</td><td>$dist</td><td>$hno</td><td>$po</td><td>$ps</td><td>$pin</td><td>$specialization</td>
		<td>
		<input type='submit' name='update' value='Update'/>&nbsp;&nbsp;
		<input type='submit' name='delete' value='Delete' onclick='return mess()'/>
		</td></tr></form>";
	}
}
else{
	print "No record available...";
}

?>