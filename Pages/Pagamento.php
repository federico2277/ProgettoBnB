<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/MyStyle.css" >
	<title>Pagamento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-sN/raN39GHQ/I9Z3qNllY71t+GK/1ydmA74wJpRr+PzrCNbIJnk2X9q3Pf0lnlULJl/YtGkiLkbwD1Stsy2Hbw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../image/logo.jpeg" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../Script/MyScript.js"></script> </head>
<body>
    <nav class="navbar sfondo">
                <a href="../index.php"><h1 class= "testonav">BnB Italia</h1></a>
                <div style="float: right;margin-right: 10px;">
                <a href="registrati.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Registrati</a>
                <a href="accedi.php" class="btn  btn btn-outline-primarybtn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true" >Accedi</a>
    </nav>
   <h1>conferma e paga</h1>

    <h2>il tuo viaggio</h2>

    <h3>date</h3>
<?php 
    session_start();
        $_SESSION['controlloIndex'] = 1;
        echo $_SESSION['controlloIndex'] ;
    echo "<h5>";
    echo $_SESSION['Check-in'];  
    echo "    ";
    echo $_SESSION['Check-out'];
    echo "</h5>";
?>
<h2>Modifica date </h2>
    <form action="Ricerca.php" method="post">
        <input type="date" name="Check-in">
        <input type="date" name="Check-out">
        <input type="submit" value="Modifica">
    </form>
<h2>Costo totale</h2>
<?php 
    echo "<h5>";
    echo $_SESSION['prezzoTotale'];
    echo "</h5>";
    if ($_SESSION['accesso']==true) {    
        echo "<a href='Prenotazione_Struttura.php' class='btn btn-danger' tabindex='-1' role='button' aria-disabled='true'>Prenota</a>";
        echo "dentro";
    }else if ($_SESSION['accesso']==false) {
        echo "<a href='Prenotazione_Struttura.php' class='btn btn-danger' disabled tabindex='-1' role='button' aria-disabled='true'>Prenota</a>";
        echo "fuori";
    }
?>
</body>
</html>