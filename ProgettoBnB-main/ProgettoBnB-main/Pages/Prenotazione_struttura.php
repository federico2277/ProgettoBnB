<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/MyStyle.css" >
	<title>Prenotazione Struttura</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-sN/raN39GHQ/I9Z3qNllY71t+GK/1ydmA74wJpRr+PzrCNbIJnk2X9q3Pf0lnlULJl/YtGkiLkbwD1Stsy2Hbw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../image/logo.jpeg" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../Script/MyScript.js"></script> </head>

<body style="background-color: #333;">
<nav class="navbar sfondo">
                <a href="../index.php"><h1 class= "testonav">BnB Italia</h1></a>
                <div style="float: right;margin-right: 10px;">
                <?php
if (!isset($_SESSION['Telefono'])) {
    echo "<a href='Affitta.php'>
        <button  class='btn button_neo btn-outline-secondary' style='color:white;margin-left:20px;' tabindex='-1' role='button' aria-disabled='true' >Affitta</button>
        </a>";
}
else {
    echo "<a href='registrati.php'> 
        <button  class='btn button_neo btn-outline-secondary' style='color:white;margin-left:20px;' tabindex='-1' role='button' aria-disabled='true'>Registrati</button>
        </a>
        <a href='accedi.php'>
        <button  class='btn button_neo btn-outline-secondary' style='color:white;margin-left:20px;' tabindex='-1' role='button' aria-disabled='true'>Accedi</button>
        </a>
        <a href='Affitta.php'>
        <button  class='btn button_neo btn-outline-secondary' style='color:white;margin-left:20px;' tabindex='-1' role='button' aria-disabled='true' >Affitta</button>
        </a>";
}
?>
    </nav>
<?php
session_start();
include "../Componets/Connessione.php";

$connessione = mysqli_connect($host, $root, $pass, $db) or die("Connessione non riuscita " . mysqli_connect_error());

$ciclo = true;
while ($ciclo) {
    $idPrenotazioneCasuale = rand(0, 100);
    $query3 = "SELECT idprenotazione FROM db_progetto_finale.prenotazione where idPrenotazione = '" . $idPrenotazioneCasuale . "' ";
    $result3 = mysqli_query($connessione, $query3) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
    $row = mysqli_fetch_assoc($result3);

    if (!isset($row['idprenotazione'])) {
        $ciclo = false;
    }

}

echo $_SESSION['Telefono'];

if (isset($_SESSION['Telefono'])) {
    $query = "INSERT INTO prenotazione 
    (idPrenotazione,ChekIn, ChekOut, Adulti, Bamini, Animali_Domestici, IdStruttura,NumTelefono)
    VALUES ('" . $idPrenotazioneCasuale . "','" . $_SESSION['Check-in'] . "','" . $_SESSION['Check-out'] . "', '" . $_SESSION['adulti'] . "',' " . $_SESSION['Bambini'] . "',' " . $_SESSION['Animali'] . "', '" . $_SESSION['idStruttura'] . "', '" . $_SESSION['Telefono'] . "');";
    $result = mysqli_query($connessione, $query) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

    $query2 = "UPDATE `db_progetto_finale`.`affituario` SET `Id_Prenotazione` = '" . $idPrenotazioneCasuale . "' WHERE (`Cod_Fiscale` = '" . $_SESSION['CodiceFiscale'] . "')";
    $result2 = mysqli_query($connessione, $query2) or
        die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
    echo
        "<main>
    <section>
        <div class='cardnath'>
            <center>
            <h1 class='neonBianco' style='text-align: center;'>Hai prenotato La struttura Con successo </h1>
            <h1 class='testonav' style='margin-top: 5%;'>Da parte nostra goditi le tue vacanze</h1>
            <center>
              <img src='../image/Prenotazione.gif' alt='prenotazione' class='imgNath'>
            </center>
            <center>
                <a href='../index.php'> 
                    <button  class='btn bottoneNath btn-outline-secondary button_neo' style='color:white;margin-top:5%;' tabindex='-1' role='button' aria-disabled='true'>Vai al Home</button>
                </a>
            </center>
        </div>
    </section>
</main>";
}
else {
    echo "<main>
        <section>
            <div class='cardnath'>
                <center>
                    <h1 class='neonBianco' style='text-align: center;'>Problemi nel Pagamento</h1>
                    <h1 class='testonav' style='margin-top: 5%;'>Registrati per effetuare il Pagamento</h1>
                <center>
                    <img src='../image/ProblemaP.jpg' alt='prenotazione' class='imgNath2'>
                </center>
                <center>
                    <a href='../index.php'> 
                        <button  class='btn bottoneNath btn-outline-secondary button_neo' style='color:white;margin-top:5%;' tabindex='-1' role='button' aria-disabled='true'>Vai al Home</button>
                    </a>
                </center>
            </div>
        </section>
    </main>";
}
?>

</body>
</html>