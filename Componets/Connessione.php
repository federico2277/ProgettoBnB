<?php
    $host = "localhost";
    $root = "root";    
    $pass = "Federico22giulia";
    $db = "db_progetto_finale";
    
    $connessione = mysqli_connect ($host, $root, $pass, $db) or die("Connessione non riuscita " . mysqli_connect_error() );
?>