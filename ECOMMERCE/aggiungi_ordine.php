<?php


    require 'db.php';


    //prendo l ID del contatto a cui legare l ordine
    $contatto_id = $_GET['id'];


    if($_SERVER["REQUEST_METHOD"] == "POST"){


        //RECUPERO I DATI DAL FORM DI INSERIMENTO DEL ORDINE
        $prodotto = $_POST['prodotto'];
        $quantita = $_POST['quantita'];
        $data = $_POST['data'];

        //query
        $sql = "INSERT INTO ordini (contatto_id, prodotto, quantita, data_di_ordine)
                    VALUES ('$contatto_id', '$prodotto', '$quantita', '$data')";


        //eseguo la query
        mysqli_query($conn, $sql);

        //reindirizzo
        header("Location: ordini.php?id=$contatto_id");

    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v<?= time() ?>">
    <title>Aggiungi ordine</title>
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
            <a href="ordini.php?id=<?= $contatto_id ?>" class="button">Torna agli Ordini</a>
        </div>
    </div>




    <div class="container">

        <h1>Aggiungi ordine</h1>

        

        <form action="" method="POST">

            Prodotto: <input name="prodotto" type="text"  required>

            Quantità: <input name="quantita" type="number"  min="1" required>

            Data: <input name="data" type="date"  required>

            

            <button type="submit">Aggiungi Ordine</button>

        </form>

        

    </div>

</body>
</html>