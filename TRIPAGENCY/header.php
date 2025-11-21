<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRIP_AGENCY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.5.0/chart.min.js" integrity="sha512-n/G+dROKbKL3GVngGWmWfwK0yPctjZQM752diVYnXZtD/48agpUKLIn0xDQL9ydZ91x6BiOmTIFwWjjFi2kEFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <!--LINK FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gwendolyn:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Waterfall&display=swap" rel="stylesheet">
        
   
    
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3C405B">

    <div class="container-fluid">

        <!--Logo o Brand-->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="images/logo4.png" alt="" style="height: 70px; width: auto;">
            <h2 class="nav_brand">Sul Viaggio - Agency</h2>
        </a>

        <!--Bottone Hamburgher-->
        <button 
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse align-items-end" id="navbarNav">
            <div class="navbar-nav ms-auto align-items-end item_right">
                <!--Link del menu-->
                <a href="clienti.php" class="nav-link">Clienti</a>
                <a href="destinazioni.php" class="nav-link">Destinazioni</a>
                <a href="prenotazioni.php" class="nav-link">Prenotazioni</a>
                <a href="ricerca.php" class="nav-link">Ricerca</a>
                <a href="statistiche.php" class="nav-link">Statistiche</a>

            </div>
        </div>
    </div>
</nav>

<main class="container mt-4">