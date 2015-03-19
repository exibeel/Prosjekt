<?php
//DB variabler
$dbHost = "localhost";		
$dbNavn = "booking";
$dbBruker = "root";
$dbPass = "";

//Kobler til databasen
$dbTilkobling = new PDO("mysql:host=$dbHost;dbname=$dbNavn;", $dbBruker, $dbPass);
?>