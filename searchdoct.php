<html>
<head>
<body style="background:url(bgimg.jpg);background-repeat:no-repeat">
</body>
</html>
<?php
include('connect.php');
extract($_POST);
$q="select doctor.*, department.*, schedule.* from doctor, department, schedule where doctor.dname=department.dname and doctor.did=schedule.did and doctor.fname  like '%$fname%'";
$result=mysql_query($q);

$n=@mysql_num_rows($result);
if($n>0){
print "<table border='1' width='100%' align='center' cellpadding='5' style='border-collapse:collapse'>
<tr><th colspan='10'> Doctor Details </th></tr>
<tr><th>Department Name</th><th>Name</th><th>Gender</th><th>Doctor Email</th><th>Specialization</th><th>Floor</th><th>Day</th><th>Time</th></tr>";

while($row=mysql_fetch_array($result)){
      $dname=$row['dname'];
      $fname=$row['fname'];
      $mname=$row['mname'];
      $lname=$row['lname'];
      $gender=$row['gender'];
      $demail=$row['demail'];
      $specialization=$row['specialization'];
      $floor=$row['floor'];
      $email=$row['email'];
      $day=$row['day'];
      $time=$row['time'];
      
      $name=ucwords($fname." ".$mname." ".$lname);
    
      print "<tr align='center'><td>$dname</td><td>$name</td><td>$gender</td><td>$demail</td><td>$specialization</td><td>$floor</td><td>$day</td><td>$time</td></tr>";
}//while
  print "</table>";
}//if
else{
	print "No record is available";
}
mysql_close($c);
?>
	