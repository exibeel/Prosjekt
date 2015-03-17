<!DOCTYPE html>
<html>
	<head>
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
		<title>Logg Inn</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!--Top Bar-->
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
			<div id="loginHolder">
				<form action="loginscript.php" method="POST">
					Brukernavn: <input type="text" name="brukernavn"/></br></br>
					Passord: <input type="password" name="passord"/></br></br>
					<input id="loginButton" type="submit" value="Logg Inn"/>
				</form>
				<h2>Eller</h2>
				<form action="registrering.php" method="POST">
					<input id="registerButton" type="submit" value="Registrer Ny Bruker"/>
				</form>
			</div>
		</div>
		<footer>
			<div id="footer"></div>
		</footer>
	</body>
</html>