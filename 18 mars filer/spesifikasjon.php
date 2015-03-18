<html>
	<head>
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
		<title>CK34 - Spesifikasjoner</title>
		<meta charset="utf-8">
	</head>
	<body>
	<!--Top Bar-->
		<div id="invisBanner">
			<div id="rightTopAlign">
				<form action ="main.php" action ="loggut.php" method ="POST">
					<input id="logOutButton" type = "submit" value = "Logg ut"/>
				</form>
			</div>
		</div>
		<div id="header">
			<div id="logoBox">
				<img id="logo" src="westerdals_logo_2.png"></img>
			</div>
		</div>
		<!--Main Body-->
		<div id="searchWin">
			<div id="stepWin">
				<p id="n1" class="inactiveNum">1</p>
				<p id="n2" class="activeNum">2</p>
				<p id="n3" class="inactiveNum">3</p>
				<div id="c1" class="inactiveCircle"></div>
				<div id="c2" class="activeCircle"></div>
				<div id="c3" class="inactiveCircle"></div>
			</div>
			<div id="cutLine" class="cutLine"></div>
			<h3 id="spesTitle">Spesifikasjoner</h3>
				<p id="spesInfo">
				Trykk på de forskjellige instillingene, og
				så på søkeknappen under for å gå til neste steg.</p>
			<div id="x">
				<form action="success.php" method="POST">
					Dato: <input type="date" name="dato"/></br>
					<p>
					Velg kapasitet (2-4):
					<select name="kapasitet">
  					<option value="2">2</option>
 					<option value="3">3</option>
 					<option value="4">4</option>
					</select>
					</p>
					<p>
					Skal rommet ha prosjektor?:
					<select name="harProsjektor">
  					<option value="Ja">Ja</option>
 					<option value="Nei">Nei</option>
					</select>
					</p>
   					<input type="submit" name="formSubmit" id="searchButton" value="Søk"/>
				</form>
			</div>
		</div>
		<div id="footer">
			<div id="footerNoteHolder">
				<p id="footerNote">booking CK34(0.8) Copyright © 2015 | All rights reserved</p>
			</div>
		</div>
	</body>
</html>