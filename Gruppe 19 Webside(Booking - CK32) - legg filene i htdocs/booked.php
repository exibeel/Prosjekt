<html>
	<head>
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
		<title>CK32 - Bestilt</title>
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
		<div id="foundWin">
			<div id="stepWin">
				<p id="n1" class="inactiveNum">1</p>
				<p id="n2" class="inactiveNum">2</p>
				<p id="n3" class="activeNum">3</p>
				<div id="c1" class="inactiveCircle"></div>
				<div id="c2" class="inactiveCircle"></div>
				<div id="c3" class="activeCircle"></div>
			</div>
			<div id="linePat1" class="linePatGray"></div>
			<div id="linePat2" class="linePatWhite"></div>
			<div id="linePat3" class="linePatGray"></div>
			<div id="linePat4" class="linePatWhite"></div>
			<h3 id="foundTitle">Rom <?php echo $_POST['book']; ?> bestilt</h3>
				<p id="foundInfo">
				Rommet du valgte har blitt bestilt til brukerkontoen din.
				Ha en fin dag!
				</p>
				<p id="romRegler">
				Møt opp til riktig tid, dato og vennligst oppgi 
				studentnummeret ditt i resepsjonen.
				
				Ved avbestilling, ring +47 00 00 00 00 
				
				Våre åpningstider er 08:00 til 16:00.
				
				Regler:
				Rydd opp etter at du er ferdig.</p>
			<?php 
			include "connection.php";
			$sqlRom=("UPDATE rom SET status='Opptatt' WHERE romnummer=" . $_POST['book'] . "");
		  	$z = $dbTilkobling->prepare($sqlRom);
		  	$z->execute();
			?>
			<div id="cutLine" class="cutLine"></div>
			<div id="foundHolder">

			</div>
		</div>
		<div id="backgroundHolder">
			<img id="backgroundPic" src="background_d.png"></img>
		</div>
		<div id="footer">
			<div id="footerNoteHolder">
				<p id="footerNote">Booking CK32(0.9) Copyright © 2015 | All rights reserved</p>
			</div>
		</div>
	</body>
</html>