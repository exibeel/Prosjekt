<?php
//DB variabler
$dbHost = "localhost";		
$dbNavn = "dbNavn";
$dbBruker = "root";
$dbPass = "";

//Kobler til databasen
$dbTilkobling = new PDO("mysql:host=$dbHost;dbname=$dbNavn;", $dbBruker, $dbPass);
?>