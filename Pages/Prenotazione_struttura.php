<!DOCTYPE html>
<html>
<head>
    <?php 
    session_start();
    if (isset($_SESSION['accesso'])) {
        $_SESSION['accesso']= true;
    }else {
        $_SESSION['accesso']= false;
    }
    $_SESSION['controlloIndex'] = 0;
    ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/MyStyle.css" >
	<title>BNB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-sN/raN39GHQ/I9Z3qNllY71t+GK/1ydmA74wJpRr+PzrCNbIJnk2X9q3Pf0lnlULJl/YtGkiLkbwD1Stsy2Hbw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="image/logo.jpeg" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="Script/MyScript.js"></script>
    
</head>
<body style="background-color: #333;">
<nav class="navbar sfondo">
            <h1 class= "testonav">BnB Italia</h1>
            <div style="float: right;margin-right: 10px;">
            <a href="./Pages/registrati.php"> 
            <button  class="btn button_neo btn-outline-secondary" style="color:white;margin-left:20px;" tabindex="-1" role="button" aria-disabled="true">Registrati</button>
            </a>
            <a href="./Pages/accedi.php">
            <button  class="btn button_neo btn-outline-secondary" style="color:white;margin-left:20px;" tabindex="-1" role="button" aria-disabled="true">Accedi</button>
            </a>
            <a href="./Pages/Affitta.php">
            <button  class="btn button_neo btn-outline-secondary" style="color:white;margin-left:20px;" tabindex="-1" role="button" aria-disabled="true" >Affitta</button>
            </a>
</nav>

<form action="Pages/Ricerca.php" method="post">
        <div class="nav" style="height: 10%;">
            <div class="Dricerca" onclick="bgDove()" id="dove" >
                <center>
                    <h5 class="testonav">Dove vuoi risiedere?</h5>
                    <input required class="inputnav" type="text" name="Dove" style="margin-top:5%;" id="dovein" value="Cerca dove allogiare">
                </center>
            </div>
            <div class="Dricerca" onclick="bgCheckin()" id="checkin">
                <center>
                    <h5 class="testonav">Check-in</h5>
                    <input required type="date" name="Check-in" style="margin-top: 5%;" class="datadiv">
                </center>
            </div>
            <div class="Dricerca" onclick="bgCheckout()" id="Checkout" >
                <center>
                    <h5 class="testonav">Check-out</h5>
                    <input required type="date" name="Check-out" style="margin-top: 5%;" class="datadiv">
                </center>
            </div>
            <div class="Dricerca" onclick="NascondiOspiti()" id="divO">
            <div class="divsinistro">
                <h5 class="testonav">Ospiti</h5>
                <br>
                <p id="valO" class="neonBianco" style="color: #fff; padding-bottom:2%;margin-left:6%;">1 Ospite Adulto</p>
            </div>
            <div class="divdestro">
                <input required type="submit" value="cerca"  class="btn button_neo btn-outline-secondary" style="float: right;margin: 15%; color:white;">
            </div>
            </div>
        </div>



        <div class="regioni" id="regioni">
        <div class="row" style="margin: 2%;">
            <div class="col-4" id="Lazio" onclick="inserimento('Lazio')">
                <img src="image/Lazio.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Lazio</h1>
            </div>
            <div class="col-4"  id="Toscana" onclick="inserimento('Toscana')">
                <img src="image/Toscana.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Toscana</h1>
            </div>
            <div class="col-4"  id="Sicilia" onclick="inserimento('Sicilia')">
                <img src="image/Sicilia.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Sicilia</h1>
            </div>
            <div class="col-4"  id="Puglia" onclick="inserimento('Puglia')">
                <img src="image/Puglia.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Puglia</h1>
            </div>
            <div class="col-4"  id="Lombardia" onclick="inserimento('Lombardia')">
                <img src="image/Lombardia.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Lombardia</h1>
            </div>
            <div class="col-4"  id="Campania" onclick="inserimento('Campania')">
                <img src="image/campania.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Campania</h1>
            </div>
            <div class="col-4" id="Abruzzo" onclick="inserimento('Abruzzo')">
                <img src="image/Abruzzo.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Abruzzo</h1>
            </div>
            <div class="col-4" id="Lazio" onclick="inserimento('Calabria')">
                <img src="image/Calabria.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Calabria</h1>
            </div>
            <div class="col-4" id="Lazio" onclick="inserimento('Piemonte')">
                <img src="image/Piemonte.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Piemonte</h1>
            </div>
            <div class="col-4" id="Lazio" onclick="inserimento('Veneto')">
                <img src="image/Veneto.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Veneto</h1>
            </div>
            <div class="col-4" id="Lazio" onclick="inserimento('Liguria')">
                <img src="image/Liguria.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Liguria</h1>
            </div>
            <div class="col-4" id="Lazio" onclick="inserimento('Marche')">
                <img src="image/Marche.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Marche</h1>
            </div>
            <div class="col-4" id="Lazio" onclick="inserimento('Friuli')">
                <img src="image/Friulia.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Friuli</h1>
            </div>
            <div class="col-4" id="Lazio" onclick="inserimento('Emilia-Romangna')">
                <img src="image/Emilia-Romangna.png" class="imaginere">
                <h5 class="nRegione" id="Regione">Emilia-Romangna</h1>
            </div>
        </div>
        
        </div>
        <div class="ospiti" id="ospiti">
                <div class="Ospitidiv">     
                        <center>
                        <h5 class="testonav" >Adulti</h5>
                        <p>Da 14 anni in su</p>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="adulti" name="adulti" onclick="nOspiti()" style="width: 50%" >
                            <option selected >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                            <option value="6" >6</option>
                            <option value="7 " >7</option>
                            <option value="8" >8</option>
                        </select>
                        </center>                  
                </div>
                <div class="divisione"></div>
                <div class="Ospitidiv">
                    <center>
                    <h5 class="testonav">Bambini</h5>
                    <p>Eta 2-12</p> 
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="bambini" name="Bambini" style="width: 50%" onclick="nOspiti()" >
                            <option value="0">0</option>
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                        </select>
                    </center>
                </div>
                <div class="divisione"></div>
                <div class="Ospitidiv">
                    <center>
                    <h5 class="testonav">Animali</h5>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="animali" name="Animali" style="width: 50%" onclick="nOspiti()" >
                            <option value="0" >0</option>
                            <option value="1" >1</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>

                    </select>
                    </center>
                </div>
                                
        </div>
    </form>
    <br>
    <main style="padding-top: 100px;">
        <section>
            <h1 class="neonBianco" style="text-align: center;font-size: 50px;">Spunti per l'estetica</h1>
            <div style="width: 100%;;height:700px;">
                <div class="imagine1"> 
                    <img src="./image/ideeProgetto2.jpg" alt="" style="width:100%;padding-right:5%;height:700px;"  class="imagineispira">
                </div>
                <div class="imagine2">
                    <img src="./image/ideeProgetto1.jpg" alt=""style="width: 100%;height:100%;margin-bottom:5%; "class="imagineispira">
                </div>
                <div class="imagine2">
                    <img src="./image/ideeProgetto3.jpg" alt=""style="width: 100%;height:100%;" class="imagineispira">
                </div>
            </div>
            <div style="width: 100%;margin-top:10px">
            <p class="testoinfo">
                Ci siamo ispirati a vari concetti per l'estetica del sito .
                La prima è la scritture al neon essendo molto belle piene di luce e colore (secondo).
                Poi continuando con il colore abbiamo scelto basandoci sui neon uno style alla cyberpunk (ottimo style sia a livello visivo che a livello estetico).
                In fine la tersa foto un po scontata ma il B&B è la propia base di tutto quindi nulla.
            </p>
            </div>
            <div class="divisione"></div>
            <h1 class="neonBianco" style="text-align: center;font-size: 50px;">Ideatori sito</h1>
            <div style="width: 100%;margin-top:50px;margin-bottom:100px;">
                <div class="divsinistro">
                    <center>
                    <img src="./image/Nath.jpg" alt="Nathan" class="icon">
                    <h1 class="neonBianco">Nath</h1>
                    <h5 class="testonav">Giacomo Vasquez</h5>
                    </center>
                </div>
                <div class="divdestro">
                    <center>
                    <img src="./image/Fede.jpg" alt="Fede" class="icon">
                    <h1 class="neonBianco">Borro</h1>
                    <h5 class="testonav">Federico Borrometi</h5>
                    </center>
                </div>
            </div>

        </section>
    </main>

</body>
</html>