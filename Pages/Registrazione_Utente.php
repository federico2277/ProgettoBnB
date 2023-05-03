<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/MyStyle.css" >
	<title>Registrazione Utente</title>
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
<body>
    <nav class="navbar sfondo">
                <a href="../index.php"><h1 class= "testonav">BnB Italia</h1></a>
                <div style="float: right;margin-right: 10px;">
                <a href="registrati.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Registrati</a>
                <a href="accedi.php" class="btn  btn btn-outline-primarybtn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true" >Accedi</a>
    </nav>
    <?php    
        include "../Componets/Connessione.php";
        $CodiceFiscale=$_POST['CodiceFiscale'];
        $Nome=$_POST['Nome'];
        $Cognome=$_POST['Cognome'];
        $Data_di_nascita=$_POST['Data_di_nascita'];
        $Email=$_POST['Email'];
        $Telefono=$_POST['Telefono'];
        $Pass=$_POST['Pass'];

        $query2 = "SELECT Cod_Fiscale from affituario ";

        $result2 = mysqli_query ($connessione, $query2) or
        die ("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
        $controllo = false;
        while ($row = mysqli_fetch_assoc ($result2)) 
        {
            if ($CodiceFiscale == $row['Cod_Fiscale']) {
                $controllo = true;
            }
        }
        if( !$controllo == true){

        $query = "INSERT INTO affituario
        (Cod_Fiscale, Nome, Cognome, Data_nascita, Email, Telefono ,Pass)
        VALUES ('". $CodiceFiscale ."',' ".$Nome."', '".$Cognome."',' ".$Data_di_nascita."',' ".$Email."', '".$Telefono."', '".$Pass."');";


        $result = mysqli_query ($connessione, $query) or
        die ("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

        session_start();
        $_SESSION['CodiceFiscale'] = $CodiceFiscale;
        $_SESSION['Nome'] = $Nome;
        $_SESSION['Cognome'] = $Cognome;
        $_SESSION['Data_di_nascita'] = $Data_di_nascita;
        $_SESSION['Telefono'] = $Telefono;

            echo "<h1>Registrazione effetuata</h1>";
            if($_SESSION['controlloIndex'] == 0){
                $_SESSION['accesso']=true;
                echo "<a href='index.php' class='btn btn-outline-secondary' tabindex='-1' role='button' aria-disabled='true'>esci</a>";
            }else{
                $_SESSION['accesso']=true;
                echo "<a href='Pagamento.php' class='btn btn-outline-secondary' tabindex='-1' role='button' aria-disabled='true'>esci</a>";
            }
        }else{
            if($_SESSION['controlloIndex'] == 0){
                echo "<h1>Registrazione non effetuata Utente gia esistente</h1>";
                echo "<a href='registrati.php' class='btn btn-outline-secondary' tabindex='-1' role='button' aria-disabled='true'>riprova</a>";
                echo "<a href='index.php' class='btn btn-outline-secondary' tabindex='-1' role='button' aria-disabled='true'>esci</a>";
            }else{
                echo "<h1>Registrazione non effetuata Utente gia esistente</h1>";
                echo "<a href='registrati.php' class='btn btn-outline-secondary' tabindex='-1' role='button' aria-disabled='true'>riprova</a>";
                echo "<a href='Pagamento.php' class='btn btn-outline-secondary' tabindex='-1' role='button' aria-disabled='true'>esci</a>";
            }
        }
        ?>
</body>
</html>