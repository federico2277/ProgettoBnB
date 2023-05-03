<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/MyStyle.css" >
	<title>Affitta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-sN/raN39GHQ/I9Z3qNllY71t+GK/1ydmA74wJpRr+PzrCNbIJnk2X9q3Pf0lnlULJl/YtGkiLkbwD1Stsy2Hbw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../image/logo.jpeg" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../Script/MyScript.js"></script>
</head>
<body style="background-color: #333;">
<h1>benevuti nella registrazione della propia struttura</h1>
<h3>Inserisci i valori richiesti</h3>
    <form action="Registrazione_struttura.php" method="post" enctype="multipart/form-data">
        <h5>Locazione della Struttura:</h5>
        <select name="Locazione" >
                    <option >Toscana</option>
                    <option >Lazio</option>
                    <option >Sicilia</option>
                    <option >Abruzzo</option>
                    <option >Lombardia</option>
                    <option >Campania</option>
                    <option >Friuli</option>
                    <option >Veneto</option>
                    <option >Calabria</option>
                    <option >Puglia</option>
                    <option >Liguria</option>
                    <option >Marche</option>
                    <option >Emilia-Romangna</option>
                </select>
            <h5>Nome Struttura</h5>
            <input type='text' name='Nome' value=''>
            <h5>stranze tot Della Struttura</h5>
            <input type='int' name='Stanze' value=''>
            <h5>Bagni tot Della Struttura</h5>
            <input type='int' name='Bagni' value=''>
            <h5>Prezzo di una notte della Struttura</h5>
            <input type='int' name='PrezzoStruttura' value=''>
            <h5>Informazioni generali della struttura</h5>
            <textarea class="form-control" name='info' placeholder="Scrivi qua le info" id="floatingTextarea2" style="height: 100px"></textarea>
            <h5>Immagnine principale della Struttura</h5>
            <input type="text" name='imgPrincipale' class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <br><br>
            <input class='' type='submit' value='Affitta'>
            <a href='../index.php' class='btn btn-outline-secondary' tabindex='-1' role='button' aria-disabled='true'>esci</a>
    </form>

</body>
</html>