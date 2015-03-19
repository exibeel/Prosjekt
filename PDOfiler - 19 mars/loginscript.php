<?php
include 'connection.php';
//Henter inn ny data
$bruker = $_POST['brukernavn'];
$pass = $_POST['passord'];

//Hvis bruker ikke skriver inn noe.

$x = $dbTilkobling->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$x->bindParam(1, $bruker);
$x->bindParam(2, $pass);
$x->execute();
$y = $x->fetch(PDO::FETCH_NUM);

if($y > 0){
	header("Location: spesifikasjon.php");
	}
else {
	header("Location: loginfail.php");
}
?>