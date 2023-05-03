<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/MyStyle.css" >
	<title>Struttuura</title>
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
                <a href="registrati.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Registrati</a>
                <a href="accedi.php" class="btn  btn btn-outline-primarybtn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true" >Accedi</a>
    </nav>
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
        echo "<h1>";
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
    echo $_SESSION['adulti'];
    $_SESSION['prezzoTotale'] = $prezzoTotale;
    ?>

    <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo $imgPrincipale ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    
    <form action="Pagamento.php" method="post">
        <input type="date" name="Check-in" value="<?php echo $_SESSION['Check-in'] ?>">
        <input type="date" name="Check-out" value="<?php echo $_SESSION['Check-out'] ?>">
        <input type="number"  name="Aldulti" min="1" value="<?php echo $_SESSION['Aldulti'] ?>">
        <input type="number" name="Bambini" value="<?php echo $_SESSION['Bambini'] ?>" >
        <input type="number" name="Animali" value="<?php echo $_SESSION['Animali'] ?>">
        <input type="submit" class="btn btn-danger" value="Prenota">
        </form>
    <h1>costo totale <?php echo $prezzoTotale ;
   // echo"</h1>  <h2>". $info ."</h2>";
    ?>
    

</body>
</html>