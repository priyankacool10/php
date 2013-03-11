
<?php 
/* Getting variable values from html form*/
$id = $_POST["id"];
$model = $_POST["model"];
$year = $_POST["year"];

/*Defining variable values for mysql connectiom*/
$host = "localhost";
$username = "root";
$pass = "priyanka";

/* Connecting to MySQL */
$con = mysql_connect ($host, $username, $pass);

/* Selecting a Database named vehicles */
$db = mysql_select_db ("vehicles", $con);

/* Inserting into MySQL table named cars */
mysql_query ("insert into cars values($id,'$model',$year);");

/*Selecting the whole table in MySQL */
$result = mysql_query ("select * from cars;");

/*Displaying MySQL table on browser */
echo "<h1>Table Content</h1>";
echo "<table border=5 color=red cellpadding=5 cellspacing=5><tr><th>Id<th>Model<th>Year</tr>";
while ($row = mysql_fetch_array ($result))
  {
    echo "<tr>";
    echo "<td>".$row['id']."<td>".$row['model']."<td>".$row['year'];
    echo "</tr>";
  }

echo "</table>";

/* Closing MySQL Connection */
mysql_close ($con);
? >
