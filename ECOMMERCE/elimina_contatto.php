<?php

require 'db.php'; // connessione al database

$id = $_GET['id']; // prende l'id passato nel link


// Esegue la cancellazione
mysqli_query($conn, "DELETE FROM contatti WHERE id=$id");


// Torna alla pagina principale
header("Location: index.php");

?>



