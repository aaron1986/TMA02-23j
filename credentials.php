<?php
// DATABASE CREDENTIALS
// This file is required by connect.php
// Configure database
// TODO: Change these to match your own TT284 database credentials
// Note that it is important to use single quotes for the password variable
$database_user = 'abs247';
$database_pass = 'JB!_9v5X7imZgNgf';

// OPTIONAL: Edit these lines if you're using another database
$database_host = 'localhost';
$database_name = $database_user . '_db';

try {
  $connection = new PDO("mysql:host=$database_host;dbname=$database_name", $database_user, $database_pass);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}