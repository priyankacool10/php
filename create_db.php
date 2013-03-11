
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
$sql="create database vehicles;";
if (mysql_query($sql))
  {
  echo "<h2>Database vehicles created successfully</h2>";
  }
else
  {
  echo "<h2>Error creating database: " . mysql_error()."</h2>";
  }
mysql_close($con);
?> 
