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
    <script src="../Script/MyScript.js"></script> 
<?php
        session_start()
?>
</head>
<body style="background-color: #333;">
    <nav class="navbar sfondo">
                <a href="../index.php"><h1 class= "testonav">BnB Italia</h1></a>
                <div style="float: right;margin-right: 10px;">
                <a href="registrati.php"> 
                <button  class="btn button_neo btn-outline-secondary" style="color:white;margin-left:20px;" tabindex="-1" role="button" aria-disabled="true">Registrati</button>
                </a>
                <a href="accedi.php">
                <button  class="btn button_neo btn-outline-secondary" style="color:white;margin-left:20px;" tabindex="-1" role="button" aria-disabled="true">Accedi</button>
                </a>
                <a href="Affitta.php">
                <button  class="btn button_neo btn-outline-secondary" style="color:white;margin-left:20px;" tabindex="-1" role="button" aria-disabled="true" >Affitta</button>
                </a>
    </nav>
    <main>
        <section>
        <h1 class="testonav">Conferma dei dati e pagamento</h1>
        <div class="cardnath">
        <h1 style="text-align: center;font-size: 50px;" class="neonBianco">Il tuo viaggio</h1>
        <div class="divinfoSS">
            <center>
            <h1 class="neonBianco"><?php echo $_SESSION['nomeStrut'];?></h1>
            <img src="<?php echo $_SESSION['img']; ?>" class="Struturaimg" alt="...">
            </center>
        </div>
        <div class="divinfostruts">
        <div style='width: 100%;'>

        <div class='divinfo'>
            <h4 style="text-align: center;" class="neonBianco">Informazioni vacanza</h4>
            <h4> Informazioni sulle  <span class='testonav'>date</span> della vacanza.</h4> 
        </div> 
        <?php 
            $_SESSION['controlloIndex'] = 1;
            echo "<center><div class='divinfoCi' ><div style='margin:5%;'><h5 class='testonav' style='margin-top:10px'>Check-in:</h5><h3 style='color:white'>";
            echo  $_SESSION['Check-in'];
            echo "</h3></div> </div>";
            echo "<div class='divinfoCO'>  <div style='margin:5%;'><h5 class='testonav'>Check-out:</h5><h3 style='color:white'>";
            echo  $_SESSION['Check-out'] ;  
            echo "</h3></div> </div></center>" ;  
        ?>
        <br>
        <div class='divinfo' >
        <h4 style="text-align: center;" class="neonBianco">Costo</h4>

        <?php 

    echo "<h4><span class='testonav'>";
    echo $_SESSION['prezzoTotale'];
    echo "$ </span>Prezzo struttura.</h4> </div> ";
        if ($_SESSION['accesso']==true) {   
            echo "<center>"; 
            echo "<a href='Prenotazione_Struttura.php' class='btn bottoneNath btn-outline-secondary button_neo' style='color:white;' tabindex='-1' role='button' aria-disabled='true'>Vai al pagamento</a>";
            echo "</center>"; 
        }else if ($_SESSION['accesso']==false) {
            echo "<center>"; 
            echo "<a href='Prenotazione_Struttura.php' class='btn bottoneNath btn-outline-secondary button_neo' style='color:white;' disabled tabindex='-1' role='button' aria-disabled='true'>Vai al pagamento</a>";
            echo "</center>"; 
        }
        ?>      </div>
            </div>
        </div>
        </section>
    </main>
</body>
</html>