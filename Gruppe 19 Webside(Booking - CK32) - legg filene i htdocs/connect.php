<?php

$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "booking";

@mysql_connect("$db_host", "$db_username", "$db_pass","$db_name") or die ("Could not connect to MySQL");
@mysql_select_db("$db_name") or die ("No Database");



function NyBruker() { 
	$studentID = $_POST['studID']; 
	$userName = $_POST['user']; 
	$password = $_POST['pass']; 
	$query = "INSERT INTO users (studentnummer,username,password) VALUES ('$studentID','$userName','$password')"; 
	$data = mysql_query ($query)or die(mysql_error()); 
	if($data) { echo ""; 
}
}
?>
<!DOCTYPE HTML> 
<html> 
	<head>
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
		<title>CK32 - Registrert Bruker!</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!--Top Bar-->
		<div id="invisBanner2">
			<div id="leftTopAlign2">
				<form action ="main.php" action ="main.php" method ="POST">
					<input id="homeButton" type = "submit" value = "Hjem"/>
				</form>
			</div>
		</div>
		<div id="header">
			<div id="logoBox">
				<img id="logo" src="westerdals_logo_2.png"></img>
			</div>
		</div>
		<!--Main Body-->
		<div id="registrertWin">
			<div id="stepWin">
				<p id="n1" class="inactiveNum">1</p>
				<p id="n2" class="inactiveNum">2</p>
				<p id="n3" class="inactiveNum">3</p>
				<div id="c1" class="inactiveCircle"></div>
				<div id="c2" class="inactiveCircle"></div>
				<div id="c3" class="inactiveCircle"></div>
			</div>
			<div id="cutLine" class="cutLine"></div>
			<div id="registeringHolder"> 
				<h3 id="regiTitle">Registrering Fullført</h3>
				<p id="regiInfo">
				Brukerkontoen din er nå registrert. Du kan nå
				logge inn for å bestille rom.</p> 
				<form action="login.php" method="POST">
					<input type="submit" value="Tilbake Til Innlogging" id="regiButton"/>
				</form>
			</div>
		</div>
		<div id="backgroundHolder">
			<img id="backgroundPic" src="background_d.png"></img>
		</div>
		<!--Bottom Bar-->
		<div id="footer">
			<div id="footerNoteHolder">
				<p id="footerNote">booking CK32(0.9) Copyright © 2015 | All rights reserved</p>
			</div>
		</div>
	</body> 
</html>
<?php
	 function Registrer() 
	 { if(!empty($_POST['user'])) 
	 { $query = mysql_query("SELECT * FROM users WHERE userName = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error()); 
	 if(!$row = mysql_fetch_array($query) or die(mysql_error())) { NyBruker(); } 
	 else { echo "Du er allerede registrert."; } } } if(isset($_POST['submit'])) { Registrer(); } 
?>