<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Studenta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Dodavanje Novog Studenta</h1>
        <form action="add_student.php" method="post">
            <label for="ime">Ime:</label>
            <input type="text" name="ime" id="ime" required>
            <label for="prezime">Prezime:</label>
            <input type="text" name="prezime" id="prezime" required>
            <input type="submit" value="Dodaj Studenta">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                include 'connect.php';
                $ime = htmlspecialchars($_POST['ime']);
                $prezime = htmlspecialchars($_POST['prezime']);
                $sql = "INSERT INTO studenti (ime, prezime) VALUES ('$ime', '$prezime')";
                if ($conn->query($sql) === TRUE) {
                    echo "<p>Novi student je uspešno dodat!</p>";
                } else {
                    echo "<p>Greška: " . $sql . "<br>" . $conn->error . "</p>";
                }
                $conn->close();
            }
        ?>
        <a href="index.php">Nazad na Listu Studenata</a>
    </div>
</body>
</html>
