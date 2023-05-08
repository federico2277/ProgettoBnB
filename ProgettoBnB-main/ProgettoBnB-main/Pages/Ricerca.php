<!DOCTYPE html>
<html lang="it">
<head>
    <?php
session_start();
?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/MyStyle.css" >
	<title>Ricerca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-sN/raN39GHQ/I9Z3qNllY71t+GK/1ydmA74wJpRr+PzrCNbIJnk2X9q3Pf0lnlULJl/YtGkiLkbwD1Stsy2Hbw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../image/logo.jpeg" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../Script/MyScript.js"></script></head>
<body style="background-color: #333;">
    <nav class="navbar sfondo">
                <a href="../index.php"><h1 class= "testonav">BnB Italia</h1></a>
                <div style="float: right;margin-right: 10px;">
    </nav>
    <form action="Ricerca.php" method="post">
    <div class="divsinistro"style="width: 35%;">
        <div class="divricercadue" >
            <center>
                <h5 class="testonav" style="margin: 2%;">Dove?</h5>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Dove" style="width: 50%;text-align: center;">
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
                <h5 class="testonav" style="margin: 2%;">inserisci quando vuoi partire</h5>
                <input type="date" name="Check-in" style="margin-top: 2%;" class="datadiv">
                <h5 class="testonav" style="margin: 2%;">inserisci quando vuoi tornare</h5>
                <input type="date" name="Check-out" style="margin-top: 2%;" class="datadiv">
                <h5 class="testonav" style="margin: 2%;">Adulti </h5>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="adulti" style="width: 50%;text-align: center;">
                            <option selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                </select>
                <h5 class="testonav" style="margin: 2%;">Bambini</h5>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Bambini" style="width: 50%;text-align: center;">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                </select>
                <h5 class="testonav" style="margin: 2%;">Animali</h5>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Animali" style="width: 50%;text-align: center;">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                    </select>
                <br>
                <input type="submit" class="btn button_neo" value="Cerca" style="color:white;margin: 2%;">
            </center>
            </form>
        </div>
</div>
<?php
include "../Componets/Connessione.php";

$query = "SELECT  idStruttura,Nome,Locazione,Stanze,Bagni,PrezzoStruttura,imgPrincipale
    FROM  struttura
    where struttura.Locazione= '" . $_POST['Dove'] . "'";
$result = mysqli_query($connessione, $query) or
    die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

$Check_in = $_POST['Check-in'];
$Check_out = $_POST['Check-out'];

$differenza = strtotime($_POST['Check-out']) - strtotime($_POST['Check-in']);
$giorni = abs($differenza / (60 * 60) / 24);

$idStruttura = 0;

echo "<div class='divdestro' style='width: 55%;margin-top:5%;margin-right:5%'>
    <div class='row'>";
while ($row = mysqli_fetch_assoc($result)) {

    $idStruttura = $row['idStruttura'];
    $PrezzoStruttura = $row['PrezzoStruttura'];
    $prezzoTotale = 0;
    $prezzoTotale = $PrezzoStruttura * $giorni;
    $idStruttura = $row['idStruttura'];
    $PrezzoStruttura = $row['PrezzoStruttura'];
    $prezzoTotale = 0;
    if ($giorni == 0) {
        $prezzoTotale = $PrezzoStruttura * 1;
    }
    else {
        $prezzoTotale = $PrezzoStruttura * $giorni;
    }
    echo "<div class='col-4 ' style='background-color: #333;'>
            <div class='card cardnath'>
                <img src='";
                echo $row['imgPrincipale'];
                echo "' class='imgcard' alt='...'>
                <div class='card-body cardbodynath' >
                    <h5 class='neonBianco' style='text-align:center;font-size:40px;'>Hotel</h5>
                    <p class='testonav'><b>";
                    echo $PrezzoStruttura;
                    echo "€</b> a notte  .</p><p class='neonBianco' style='text-align:center;'><b>";
                    echo $prezzoTotale;
                    echo "$ </b> in totale costa:</p>
                    <center>
                    <form action='Struttura.php' method='post'>
                    <input type='hidden' name='idStruttura' value='$idStruttura'>
                    <input type='submit' class='btn button_neo ' style='color:white;' value='prenota'>
                    </form>
                    </center>
                </div>
            </div>
        </div>";
}
echo "</div>
    </div>";


$_SESSION['Check-in'] = $_POST['Check-in'];
$_SESSION['Check-out'] = $_POST['Check-out'];
$_SESSION['adulti'] = $_POST['adulti'];
$_SESSION['Bambini'] = $_POST['Bambini'];
$_SESSION['Animali'] = $_POST['Animali'];
?>
        
        <main>
        <section>

        </section>
    </main>
    <script src="Script/MyScript.js"></script>
</body>
</html>