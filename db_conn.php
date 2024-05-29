<?php
// change the arguments for server, username, and password to match your local mysql database
$server = 'localhost';
$username = 'root';
$password = ''; 
$databaseName = 'bk_assessment';

// Create connection to database
$conn = new mysqli($server, $username, $password, $databaseName);

// Check connection with database
if ($conn -> connect_error){
    die("Connection failed: " . $conn -> connect_error);
}

echo "<script> console.log('Connected successfully')</script>";

?>