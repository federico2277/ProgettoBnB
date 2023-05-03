<!DOCTYPE html>
<html lang="in">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/MyStyle.css" >
	<title>Registrati</title>
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

<h1 class="Titolo"> Inserimento nuovo Utente </h1>
<form action="Registrazione_Utente.php" method="post">
    <div class="container text-center">
        <div class="row">
            <div class="col">
            <label  class="col-sm-2 col-form-label">Nome</label>
                <input name="Nome"  required type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="col">
            <label  class="col-sm-2 col-form-label">Cognome</label>
            <input name="Cognome"  required type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="col">
            <label  class="col-sm-2 col-form-label">Datadinascita</label>
                <input name="Data_di_nascita"  required type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <label  class="col-sm-2 col-form-label">Telefono</label>
                <input name="Telefono" type="int" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="col">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <input type="password"  required name="Pass" class="form-control" id="inputPassword">
            </div>
            <div class="col">
                <label  class="col-sm-2 col-form-label">CodiceFiscale</label>
                <input name="CodiceFiscale" maxlength="16" required type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="col">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Email</label>
            <input type="email" class="form-control"  required name="Email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
        </div>
    </div>
    
    <br><br>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <input type="submit"class="btn btn-outline-succes" value="invia i dati">
            </div>
        </div>
    </div>
</form>
<br><br>
<hr>

</body>
</html>