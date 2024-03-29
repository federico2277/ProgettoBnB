<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/MyStyle.css" >
	<title>Registrazione_struttura</title>
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
<nav class="navbar sfondo">
                <a href="../index.php"><h1 class= "testonav">BnB Italia</h1></a>
                <div style="float: right;margin-right: 10px;">
    </nav>
    <div class="nav">
        <div class="container text-center">
            <?php
            
        include "../Componets/Connessione.php";

        $Nome = $_POST['Nome'];
        $Locazione = $_POST['Locazione'];
        $Stanze = $_POST['Stanze'];
        $Bagni = $_POST['Bagni'];
        $PrezzoStruttura = $_POST['PrezzoStruttura'];
        $imgPrincipale = $_POST['imgPrincipale'];
        $info = $_POST['info'];
        $info = str_replace("'", "#", $info);


        $query ="INSERT INTO struttura 
        (Nome,Locazione,Stanze,Bagni,PrezzoStruttura,imgPrincipale,info)
        VALUES ('".$Nome."', '".$Locazione."','".$Stanze."', '".$Bagni."', '".$PrezzoStruttura."', '".$imgPrincipale."', '".$info."');";

        $result = mysqli_query ($connessione, $query) or
        die ("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

        echo "<h1 class='testonav'>Registrazione Struttura andata a buon fine</h1>";
        echo "<img src='../image/Spunta.jpg' width='200' height='200' style='border-radius:65px'> <br><br>";
        echo "<a href='../index.php' class='btn button_neo'  style='color:white;' tabindex='-1' role='button' aria-disabled='true'>esci</a>";

        ?>
    </div>
</div>

</body>
</html>