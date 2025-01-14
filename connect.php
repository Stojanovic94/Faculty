<?php
// Podaci za povezivanje sa bazom podataka
$servername = "localhost";
$username = "root";
$password = ""; // Prazno polje, jer XAMPP podrazumevano nema lozinku za root korisnika
$dbname = "fakultet";
// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);
// Provera konekcije
if ($conn->connect_error) {
die("Konekcija nije uspela: " . $conn->connect_error);
}
echo "Uspesno povezano sa bazom!";
?>