


<?php include 'header.php'; ?>
<?php include 'db.php'; ?>



<!--FORM RICERCA LIBRO-->
        <h3>Ricerca Prenotazione</h3>
        <form action="" method="POST">

            <div class="col-md-12">
                <input type="text" name="search_title" class="form-control" placeholder="Inserisci il codice di Prenotazione...">
            </div>

            <!--Bottone di invio ricerca -->
            <div class="col-md-2">
                <button type="submit" class="btn btn-secondary mt-3 w-100" name="search">Cerca</button>
            </div>

        </form>








        <!--CREO I RISULTATI DELLA RICERCA PER TITOLO-->
        
        <?php  if($searchIDPrenotazioni !== null) :  ?> <!-- se sto effettivamente cercando qualcosa -->

            <h3>Risultato Ricerca Prenotazione</h3>
            <?php if($searchResult) : ?>
                
                <div class="card">

                    <div class="card-body d-flex justify-content-between align-items-center">

                        <?= $searchResult->getInfo() ?>

                    </div>

                </div>
            <?php else: ?>
                <p>Nessun libro trovato</p>

            <?php endif; ?>

        <?php endif; ?>









<?php include 'footer.php'; ?>