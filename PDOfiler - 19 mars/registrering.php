<!DOCTYPE HTML> 
<html> 
	<head>
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
		<title>CK34 - Registrere Ny Bruker</title>
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
		<div id="Sign-Up">
			<div id="registeringWin">
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
				<h3 id="regTitle">Registrering Fullført</h3>
				<p id="regInfo">
				Brukerenkontoen din er nå registrert. Du kan nå
				logge inn for å bestille rom.</p> 
					<form method="POST" action="connect.php"> 
					StudentID:<input type="text" id="regField1" name="studID" placeholder="Skriv inn her.."></br></br>
					Brukernavn:<input type="text" id="regField2" name="user" placeholder="Skriv inn her.."></br></br>
					Passord:<input type="password" id="regField3" name="pass" placeholder="Skriv inn her.."></br></br>
					<input id="knapp" type="submit" name="submit" value="Registrer"></td> </tr> 
					</form>
				</div>
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