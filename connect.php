<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fakultet";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Konekcija nije uspela: " . $conn->connect_error);
}
echo "Uspesno povezano sa bazom!";
?>
