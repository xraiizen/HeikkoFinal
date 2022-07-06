<?php

$servername = "localhost";
$database = "heikko";
$username = "root";
$password = "";
$port = "3308";

// Create connection
$GLOBALS['conn'] = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo("Connection failed:"+$database);
}
?>