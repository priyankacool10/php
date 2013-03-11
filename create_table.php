
<?php
$con=mysql_connect("localhost","root","priyanka");
// Check connection
if (mysql_error())
  {
  echo "Failed to connect to MySQL: " . mysql_error();
  }
else
echo "<h1>Connection Established<br>";
// Create database
$db=mysql_select_db("vehicles",$con);
mysql_query("drop table cars;");
$sql="CREATE TABLE cars(id int(11) NOT NULL AUTO_INCREMENT primary key,model varchar(30),year int(4));";

if (mysql_query($sql))
  {
  echo "<h3>Table named cars is created in database named vehicles  successfully</h3>";
  }
else
  {
  echo "<h3>Error creating table: " . mysql_error()."</h3>";
  }
mysql_close($con);
?> 
