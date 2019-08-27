<?php
extract($_POST);
include('connect.php');
$q="select * from department";
$res=mysql_query($q);
$n=@mysql_num_rows($res);
if($n>0){
	print "<table border='1' width='100%' align='center' cellpadding='5' style='border-collapse:collapse'>
	<tr><th colspan='7'><h2>Department Detail</h2></th></tr>
	<tr><th>Department Name</th><th>Floor</th><th>Dept Email</th><th>Doc. Id</th><th>Doc. Name</th><th>Doc. Email</th><th>Specialization</th> </tr>";
	while($row=mysql_fetch_array($res)){
		$dname=$row['dname'];
		$floor=$row['floor'];
		$email=$row['email'];	
}
else{
	print "nothing to search";
}

mysql_close($c);
?>