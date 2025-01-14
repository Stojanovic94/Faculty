<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prikaz Studenata</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>Lista Studenata</h1>
            <?php
                include 'connect.php';
                $sql = "SELECT id, ime, prezime FROM studenti";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<p>ID: <strong>" . $row["id"] . "</strong> - Ime: <strong>" . $row["ime"] . "</strong> Prezime: <strong>" . $row["prezime"] . "</strong></p>";
                    }
                } else {
                    echo "<p>Nema studenata u bazi.</p>";
                }
                $conn->close();
            ?>
            <a href="add_student.php">Dodaj Novog Studenta</a>
        </div>
    </body>
</html>
