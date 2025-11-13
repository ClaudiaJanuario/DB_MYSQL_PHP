<?php
    require 'db.php';

    // Controllo ID
    if (!isset($_GET['id']) || !ctype_digit($_GET['id'])) {
        die("ID mancante o non valido!");
    }

    $id = (int) $_GET['id'];

    // Se il form è stato inviato, aggiorno i dati
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];

        mysqli_query($conn, "UPDATE contatti SET nome='$nome', telefono='$telefono', email='$email' WHERE id=$id");

        header("Location: index.php");
        exit;
    }

    // Recupero i dati del contatto
    $result = mysqli_query($conn, "SELECT * FROM contatti WHERE id=$id");
    $contatto = mysqli_fetch_assoc($result);

    if (!$contatto) {
        die("Contatto non trovato!");
    }

?>





<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica contatto</title>
    <link rel="stylesheet" href="style.css?v<?= time() ?>">
</head>
<body>


     <!---NAVBAR--->

    <div class="navbar">
    <!-- Logo -->
        <div class="logo">
            <a href="index.php">
                <img src="https://tse2.mm.bing.net/th/id/OIP.q9K3RrSllqBdCk7sVbnp-QHaEK?pid=Api&P=0&h=180" alt="Logo Ditta">
            </a>
        </div>

        <!-- Menu di navigazione -->
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="aggiungi_contatto.php">Aggiungi Contatto</a>
            <a href="index.php">Contatti</a>
        </div>
    </div>






    <div class="container">

        <h1>Modifica contatto</h1>

            <form action="" method="POST">

                Nome : <input name="nome" type="text"  value="<?= $contatto['nome'] ?>">

                Telefono : <input name="telefono" type="text"  value="<?= $contatto['telefono'] ?>">

                Email : <input name="email" type="text"  value="<?= $contatto['email'] ?>">

                <button type="submit" class="button">Aggiorna</button>

            </form>

            
    </div>

</body>
</html>
