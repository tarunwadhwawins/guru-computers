<?php
session_start();
// For Live
// $servername = "localhost";
// $username = "ditstek";
// $password = "ditstekdb@9876";
// $dbname = "ditstekdb";

// For Local
$servername = "localhost";
$username = "ditstekserver_gurudb";
$password = "gurudb@1234!";
$dbname = "ditstekserver_gurudb";
$url = "https://www.gurucomputers.ca/";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
