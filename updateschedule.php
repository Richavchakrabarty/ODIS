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
$q="select * from schedule";
$res=mysql_query($q);
$n=@mysql_num_rows($res);
if($n>0){
	print "<table border='1' width='100%' align='center' cellpadding='5' style='border-collapse:collapse'>
		<tr><th colspan='4'>Schedule Detail</th></tr>
		<tr><th>Doctor Id</th><th>Day</th><th>Time</th><th>Click Update/Delete link to update a record</th></tr>";
	while($row=mysql_fetch_array($res)){
      		$did=$row['did'];
      		$day=$row['day'];
      		$time=$row['time'];
      		
		print "<form name='f' method='post' action='deleteschedule.php'>
		<input type='hidden' name='day' value='$day'/>
		<tr align='center'><td>$did</td><td>$day</td><td>$time</td>
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