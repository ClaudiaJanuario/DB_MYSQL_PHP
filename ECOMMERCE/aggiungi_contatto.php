<?php

    require 'db.php';

    //se il form è stato inviato tramite il metodo POST

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nome = $_POST['nome'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];

        //query

        $sql = "INSERT INTO contatti (nome, telefono, email ) VALUES ('$nome', '$telefono', '$email')";

        //eseguo la query

        mysqli_query($conn, $sql);

        //reindirizzamento utente alla index post inserimento

        header("Location: index.php");


    }
?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi Contatto</title>
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

        <h1>Aggiungi contatto</h1>

        <form action="" method="POST">

            Nome : <input name="nome" type="text" required>

            Telefono : <input name="telefono" type="text" required>

            Email : <input name="email" type="text" required>

            <button type="submit">Salva</button>
 
        </form>

            <a href="index.php" class="button">Torna alla lista</a>

    </div>

</body>
</html>