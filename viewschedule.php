<html>
<head>
<body style="background:url(content.jpg);background-repeat:no-repeat">
</body>
</html>
<?php
include('connect.php');
$q="select * from schedule";
$result=mysql_query($q);

$n=@mysql_num_rows($result);
if($n>0){
print "<table border='1' width='100%' align='center' cellpadding='5' style='border-collapse:collapse'>
<tr><th colspan='4'>Schedule Detail</th></tr>
<tr><th>Doctor ID</th><th>Day</th><th>Time</th></tr>";

while($row=mysql_fetch_array($result)){
      $did=$row['did'];
      $day=$row['day'];
      $time=$row['time'];
     print "<tr align='center'><td>$did</td><td>$day</td><td>$time</td></tr>";
}//while
  print "</table>";
}//if
else{
	print "No record is available";
}
mysql_close($c);
?>
	