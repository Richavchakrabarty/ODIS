<?php
$c=mysql_connect("localhost","root","");  
/*mysql_connect(), 3 parameters - server name, mysql user name and password*/
$db=mysql_select_db("onlinedis",$c);

if(!$c){
	print "Could not connect to the MySQL - server";
	print mysql_error();
	exit(0);
}

if(!$db){
	print "Could not open the database, onlinedis";
	print mysql_error();
	exit(0);
}
?>