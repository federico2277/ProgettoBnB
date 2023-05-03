<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/MyStyle.css" >
	<title>Log-In</title>
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
    </nav>
    <div class="nav">
        <div class="container text-center">
            <?php
            session_start();
            include "../Componets/Connessione.php";
            
            $connessione = mysqli_connect ($host, $root, $pass, $db) or die("Connessione non riuscita " . mysqli_connect_error() );
            $query = "SELECT Email,Pass FROM db_progetto_finale.affituario;";

            $result = mysqli_query ($connessione, $query) or
            die ("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
            $controllo = false;
            while ($row = mysqli_fetch_assoc ($result)) //solo associativo
            {
                if($_POST['Email'] == $row['Email'] || $_POST['Pass'] == $row['Pass']){
                    $controllo = true;
                }
            }
            $_SESSION['accesso']=false;
            if($controllo == true){ 

                $query2 = "SELECT Cod_Fiscale, Nome, Cognome, Data_nascita,Telefono   FROM affituario where Email = '".$_POST['Email']."'";

                $result2 = mysqli_query ($connessione, $query2) or
                die ("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

                while ($row = mysqli_fetch_assoc ($result2)) //solo associativo
                {
                    $_SESSION['CodiceFiscale'] = $row['Cod_Fiscale'];
                    $_SESSION['Nome'] = $row['Nome'];
                    $_SESSION['Cognome']  = $row['Cognome'];
                    $_SESSION['Data_di_nascita']  = $row['Data_nascita'];
                    $_SESSION['Telefono'] = $row['Telefono'];
                }
                if($_SESSION['controlloIndex'] == 0){
                    $_SESSION['accesso']=true;
                    echo "<h1 class='testonav'>Accesso Effetuato</h1> <br>";
                    echo "<img src='../image/pollice_SU.jpg' width='200' height='200' style='border-radius:65px'> <br><br>";
                    echo "<a href='../index.php' class='btn button_neo'  style='color:white;' tabindex='-1' role='button' aria-disabled='true'>esci</a>";
                    
                }else{
                    $_SESSION['accesso']=true;
                    echo "<h1 class='testonav'>Accesso Effetuato</h1> <br>";
                    echo "<img src='../image/pollice_SU.jpg' width='200' height='200' style='border-radius:65px'> <br><br>";
                    echo "<a href='Pagamento.php' class='btn button_neo'  style='color:white; tabindex='-1' role='button' aria-disabled='true'>esci</a>";
                }
            }else{
                if($_SESSION['controlloIndex'] == 0){
                    $_SESSION['accesso']=false;
                    echo "<h1 class='testonav'>Non esiste questo utente</h1> <br>";
                    echo "<img src='../image/pollice_GIU.jpg' width='200' height='200' style='border-radius:65px'> <br><br>";
                    echo "<a href='accedi.php' class='btn button_neo'  style='color:white; tabindex='-1' role='button' aria-disabled='true'>riprova</a>";
                    echo "<a href='../index.php' class='btn button_neo'  style='color:white; tabindex='-1' role='button' aria-disabled='true'>esci</a>";
                    
                }else{
                    $_SESSION['accesso']=false;
                    echo "<h1 class='testonav'>Non esiste questo utente</h1> <br>";
                    echo "<img src='../image/pollice_GIU.jpg' width='200' height='200' style='border-radius:65px'> <br><br>";
                    echo "<a href='accedi.php' class='btn button_neo'  style='color:white; tabindex='-1' role='button' aria-disabled='true'>riprova</a>";
                    echo "<a href='Pagamento.php' class='btn button_neo'  style='color:white; tabindex='-1' role='button' aria-disabled='true'>esci</a>";                    
                }
                
            }
            ?>
        </div>
    </div>
</body>
</html>