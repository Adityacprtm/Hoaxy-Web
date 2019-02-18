<?php
$servername = "localhost";
$username = "adif7157_aditya";
$password = "aydict97";
$dbname = "adif7157_contacts";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>