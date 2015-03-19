<!DOCTYPE html>
<html>
	<head>
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
		<title>CK34 - Logg Inn</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!--Top Bar-->
		<div id="invisBanner2">
			<div id="leftTopAlign">
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
		<div id="loginWin">
			<div id="stepWin">
				<p id="n1" class="activeNum">1</p>
				<p id="n2" class="inactiveNum">2</p>
				<p id="n3" class="inactiveNum">3</p>
				<div id="c1" class="activeCircle"></div>
				<div id="c2" class="inactiveCircle"></div>
				<div id="c3" class="inactiveCircle"></div>
			</div>
			<div id="cutLine" class="cutLine"></div>
			<div id="loginHolder">
				<h3 id="logTitle">Logg Inn</h3>
				<p id="logInfo">
				Skriv inn brukernavn, passord og trykk på logg inn for å 
				gå til neste steg.</p>
				<form action="loginscript.php" method="POST">
					Brukernavn: <input type="text" id="userHolder" name="brukernavn" placeholder="Skriv inn her.."/></br></br>
					Passord: <input type="password" id="passHolder" name="passord" placeholder="Skriv inn her.."/></br></br>
					<p id="loginfail">
					Ugyldig brukernavn eller passord.</p>
					<input id="loginButton" type="submit" value="Logg Inn"/>
				</form>
				<form action="registrering.php" method="POST">
					<input id="registerButton" type="submit" value="Registrer Ny Bruker"/>
				</form>
			</div>
		</div>
		<div id="backgroundHolder">
			<img id="backgroundPic" src="background_d.png"></img>
		</div>
		<!--Bottom Bar-->
		<div id="footer">
			<div id="footerNoteHolder">
				<p id="footerNote">booking CK34(0.8) Copyright © 2015 | All rights reserved</p>
			</div>
		</div>
	</body>
</html>