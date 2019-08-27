<html>
<head>
<body style="background:url(content.jpg);background-repeat:no-repeat">
</body>
</html>
<?php
include('connect.php');
$q="select * from department";
$result=mysql_query($q);

$n=@mysql_num_rows($result);
if($n>0){
print "<table border='1' width='100%' align='center' cellpadding='5' style='border-collapse:collapse'>
<tr><th colspan='4'>Department Detail</th></tr>
<tr><th>Department Name</th><th>Floor</th><th>Email</th></tr>";

while($row=mysql_fetch_array($result)){
      $dname=$row['dname'];
      $floor=$row['floor'];
      $email=$row['email'];
     print "<tr align='center'><td>$dname</td><td>$floor</td><td>$email</td></tr>";
}//while
  print "</table>";
}//if
else{
	print "No record is available";
}
mysql_close($c);
?>
	