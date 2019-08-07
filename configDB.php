<?php
/* Database credentials. Running MySQL
server with default setting (user 'root' with no password) */

$servername = "localhost";
$dbname = "application";
$username = "root";
$password = "";

/* Attempt to connect to MySQL database */
$conn = new mysqli($servername, $dbname, $username, $password);

// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

echo "Connected successfully";

?>