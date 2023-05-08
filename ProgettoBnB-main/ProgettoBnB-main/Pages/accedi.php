<!DOCTYPE html>
<html lang="en">
<head>



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/MyStyle.css" >
	<title>Accedi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-sN/raN39GHQ/I9Z3qNllY71t+GK/1ydmA74wJpRr+PzrCNbIJnk2X9q3Pf0lnlULJl/YtGkiLkbwD1Stsy2Hbw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../image/logo.jpeg" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../Script/MyScript.js"></script>
    <head>
<body style="background-color: #333;">
    <nav class="navbar sfondo">
                <a href="../index.php"><h1 class= "testonav">BnB Italia</h1></a>
                <div style="float: right;margin-right: 10px;">
    </nav>
    <div class="row">
            <div class="col">
    <h1 class="testonav">accedi</h1>
<form action="log-in.php" method="post">
    <div class="nav" >
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label"><p class="testonav">Email</p></label>
                <center>  <input type="email" class="form-control testonav  "  required name="Email" id="exampleFormControlInput1" placeholder="name@example.com" style="width:50%;"></center>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <label for="inputPassword" class="col-sm-2 col-form-label"><p class="testonav">Password</p></label>
                    <center><input type="password"  required name="Pass" class="form-control testonav " style="width:50%;" id="inputPassword"></center>
                </div>
            </div>
        </div>
        
        <br><br><br><br><br>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <input type="submit" class="btn button_neo"  style="color:white;"   value="invia i dati">
                    <a href='../index.php'  class="btn button_neo"  style="color:white;" tabindex='-1' role='button' aria-disabled='true'>esci</a>
                </div>
                <br><br><br><br>
            </div>
        </div>
    </div>
</div>
</div>
</form>
</body>
</html>