<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/MyStyle.css" >
	<title>Struttura</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-sN/raN39GHQ/I9Z3qNllY71t+GK/1ydmA74wJpRr+PzrCNbIJnk2X9q3Pf0lnlULJl/YtGkiLkbwD1Stsy2Hbw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../image/logo.jpeg" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../Script/MyScript.js"></script> </head>
</head>
<body style="background-color: #333;">
    <nav class="navbar sfondo">
                <a href="../index.php"><h1 class= "testonav">BnB Italia</h1></a>
                <div style="float: right;margin-right: 10px;">
    </nav>
    <main>
    <section>
    <?php
    session_start();
    $_SESSION['idStruttura'] = $_POST['idStruttura'];
    include "../Componets/Connessione.php";
    $query = "SELECT nome, Stanze, Bagni, PrezzoStruttura,imgPrincipale,info FROM db_progetto_finale.struttura
    where idStruttura = '".$_POST['idStruttura']."';";

    $result = mysqli_query ($connessione, $query) or
    die ("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

    while ($row = mysqli_fetch_assoc ($result)) //solo associativo
    {
        $nome = $row['nome'];
        echo "<h1 class='testonav'>";
        echo $nome ;
        echo "</h1>";
        $Stanze = $row['Stanze'];
        $PrezzoStruttura = $row['PrezzoStruttura'];
        $Bagni = $row['Bagni'];
        $imgPrincipale = $row['imgPrincipale'];
        $info = $row['info'];

    }
    $differenza = strtotime($_SESSION['Check-out']) - strtotime($_SESSION['Check-in']);
    $giorni = abs($differenza/(60 * 60)/24);
    $prezzoTotale = 0;
    $prezzoTotale = $PrezzoStruttura * $giorni  ; 
    $_SESSION['prezzoTotale'] = $prezzoTotale;
    ?>
        <img src="<?php echo $imgPrincipale ?>" class="Struturaimg" alt="...">
        <div class="divisione" style="margin-top:100px;"></div>
    <?php 
        echo "<div style='width: 100%;'>";
    echo" <div class='divinfoSS'><h1 class='testonav'>Informazione struttura</h1>
    <h2 style='color:white;'>". $info ."</h2>";
    echo "  <div style='width:100%;height:120px'>
    <div class='divsinistroicona' ><img src='../image/bagno.png' alt='bagno' style='width: 100px;'></div>
    <div class='divdestroicona'><h3 class='testonav'>Numero di bagni:<span>";
    echo  $Bagni ;
    echo "</span></h3></div>
    </div>";
    echo "  <div style='width:100%; 120px'>
    <div class='divsinistroicona'><img src='../image/stanza.png' alt='bagno' style='width: 100px;'></div>
    <div class='divdestroicona'><h3 class='testonav'>Numero di stanze:<span>";
    echo  $Stanze ;
    echo "</span></h3></div>
    </div>";


    echo "</div>";


        echo "<div class='divinfostruts'> ";
        echo "<div class='divinfo'><h4><span class='testonav'>";
        echo $prezzoTotale ;
        echo "$ </span>Prezzo struttura</h4> </div> ";

        echo "<center><div class='divinfoCi' ><div style='margin:5%;'><h5 class='testonav' style='margin-top:10px'>Check-in:</h5> <h3 style='color:white'>";
        echo  $_SESSION['Check-in'];
        echo "</h3></div> </div>";
        echo "<div class='divinfoCO'>  <div style='margin:5%;'><h5 class='testonav'>Check-out:</h5><h3 style='color:white'>";
        echo  $_SESSION['Check-out'] ;  
        echo "</h3></div> </div></center>" ;    
        echo "<div class='divinfo'  style='margin-top:10px;' > <center>";  
            echo "<h4 class='testonav'> Adulti :</h4> ";
            echo  $_SESSION['adulti'] ;
            echo "<h4 class='testonav'>Bambini :</h4> ";
                echo  $_SESSION['Bambini'] ;
                echo "<h4 class='testonav'> Animali :</h4> ";
                echo  $_SESSION['Animali'] ;
        echo "</center></div>";
        echo " <center><a href='Pagamento.php' class='btn btn-outline-secondary bottoneNath' tabindex='-1' role='button' aria-disabled='true' >Procedi</a></center>";
        echo " </div></div>";

    ?>
        
</body>
</html>