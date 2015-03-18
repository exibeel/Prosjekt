<html>
	<head>
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
		<title>CK34 - Rom</title>
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
			<h3 id="foundTitle">Rom</h3>
				<p id="foundInfo">
				Trykk på "Bestill Rom"-knappen ved siden av et av 
				alternativene nedenfor for å fullføre bestillingen din.</p>
				<div id="cutLine" class="cutLine"></div>
			<div id="foundHolder">
<?php

include 'connection.php';

	if(isset($_POST['harProsjektor']) && 
		$_POST['harProsjektor'] == 'Ja')	
	if(isset($_POST['kapasitet']) &&
		$_POST['kapasitet'] == '2') 
	{
    $sql = 'SELECT * FROM rom WHERE status="ledig" AND harProsjektor="Ja" AND kapasitet = "2"';
	}

	if(isset($_POST['harProsjektor']) && 
		$_POST['harProsjektor'] == 'Ja')	
	if(isset($_POST['kapasitet']) &&
		$_POST['kapasitet'] == '3') 
	{
    $sql = 'SELECT * FROM rom WHERE status="ledig" AND harProsjektor="Ja" AND kapasitet = "3"';
	}


	if(isset($_POST['harProsjektor']) && 
		$_POST['harProsjektor'] == 'Ja')	
	if(isset($_POST['kapasitet']) &&
		$_POST['kapasitet'] == '4') 
	{
    $sql = 'SELECT * FROM rom WHERE status="ledig" AND harProsjektor="Ja" AND kapasitet = "4"';

	}
	if(isset($_POST['harProsjektor']) &&
		$_POST['harProsjektor'] == 'Nei')
	if(isset($_POST['kapasitet']) &&
		$_POST['kapasitet'] == '2')
	{
    $sql = 'SELECT * FROM rom WHERE status="ledig" AND harProsjektor="Nei" AND kapasitet ="2"';
	}

	if(isset($_POST['harProsjektor']) &&
		$_POST['harProsjektor'] == 'Nei')
	if(isset($_POST['kapasitet']) &&
		$_POST['kapasitet'] == '3')
	{
    $sql = 'SELECT * FROM rom WHERE status="ledig" AND harProsjektor="Nei" AND kapasitet ="3"';
	}

	if(isset($_POST['harProsjektor']) &&
		$_POST['harProsjektor'] == 'Nei')
	if(isset($_POST['kapasitet']) &&
		$_POST['kapasitet'] == '4')
	{
    $sql = 'SELECT * FROM rom WHERE status="ledig" AND harProsjektor="Nei" AND kapasitet ="4"';
	}

$q = $dbTilkobling->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
?>

<?php while ($r = $q->fetch()): ?>

	<table border="1">
		<tr>
			<td><?php echo ($r['romnummer']) ?></td>
			<td><?php echo ($r['kapasitet']) ?></td>
			<td><?php echo ($r['status']); ?></td>
			<td><?php echo ($r['harProsjektor']); ?></td>
		</tr>
	</table>
<div id = "bookHolder">
	<form action="main.php" method="POST">
		<input type="submit" id="bookButton" value="Bestill Rom"/>
	</form>
</div>
<?php endwhile; ?>

			</div>
		</div>
		<div id="footer">
			<div id="footerNoteHolder">
				<p id="footerNote">booking CK34(0.8) Copyright © 2015 | All rights reserved</p>
			</div>
		</div>
	</body>
</html>