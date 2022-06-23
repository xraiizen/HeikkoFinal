<?php

$servername = "localhost";
$database = "heikko";
$username = "root";
$password = "111198";

// Create connection
$GLOBALS['conn'] = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo("Connection failed:"+$database);
}
?>