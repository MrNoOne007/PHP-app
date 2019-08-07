<?php
$servername = "localhost";
$dbname = "application";
$DBusername = '';
$DBpassword = '';

$conn = mysql_connect($servername,$dbname, $DBusername, $DBpassword);

if (! $conn ) {
die ('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';
mysql_close($conn);

?>