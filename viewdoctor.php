<html>
<head>
<body style="background:url(content.jpg);background-repeat:no-repeat">
</body>
</html>
<?php
include('connect.php');
$q="select * from doctor";
$result=mysql_query($q);

$n=@mysql_num_rows($result);
if($n>0){
print "<table border='1' width='100%' align='center' cellpadding='5' style='border-collapse:collapse'>
<tr><th colspan='12'> Doctor Detail </th></tr>
<tr><th>Doctor ID</th><th>Department Name</th><th>Name</th><th>Gender</th><th>Email</th><th>State</th><th>Dist.</th><th>House No.</th><th>Post Office</th><th>Police Station</th><th>PIN</th><th>Specialization</th></tr>";

while($row=mysql_fetch_array($result)){
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
    
      print "<tr align='center'><td>$did</td><td>$dname</td><td>$name</td><td>$gender</td><td>$demail</td><td>$state</td><td>$dist</td><td>$hno</td><td>$po</td><td>$ps</td><td>$pin</td><td>$specialization</td></tr>";
}//while
  print "</table>";
}//if
else{
	print "No record is available";
}
mysql_close($c);
?>
	