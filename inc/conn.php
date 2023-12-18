<?php

$host = "sql307.infinityfree.com";
$username = "if0_35549556";
$pass = "lcMOMnzpyqxI";
$db = "if0_35549556_ticketing_db";

$conn = new mysqli("localhost","root","","ticketing");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>