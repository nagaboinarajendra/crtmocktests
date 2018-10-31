<?php
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "db_exam"; 
$table = "video"; 
 
// Connection to DBase 
mysql_connect($host,$user,$password); 
@mysql_select_db($dbase) or die("Unable to select database");

$result= mysql_query( "SELECT list, name FROM video ORDER BY ID" ) 
or die("SELECT Error: ".mysql_error()); 
print "<table border=1>\n"; 
while ($row = mysql_fetch_array($result)){ 
$videos_field= $row['name'];
print "<tr>\n"; 
print "\t<td>\n"; 
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><video width='320' controls><source src='$videos_field'>Your browser does
not support the video tag.</video></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n"; 

?> 
