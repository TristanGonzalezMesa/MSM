<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "msm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "msm";

try{
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>

<?php
$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($resultHonden = $mysqli->query("SELECT id FROM gebruikers")) {

    $row_cnt = $resultHonden->num_rows;
    $resultHonden->close();
}

$mysqli->close();

?>