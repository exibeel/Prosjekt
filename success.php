<html>
	<head>
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
		<title>Spesifikasjoner</title>
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
			<div id="foundHolder">
<?php
include 'connection.php';

$sql = 'SELECT * FROM rom WHERE status="ledig"';

$q = $dbTilkobling->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
?>
<h1>Rom</h1>
<?php while ($r = $q->fetch()): ?>

	<table border="2">
	<tr>
		
	 <td><?php echo ($r['romnummer']) ?> </td>
	 <td><?php echo ($r['kapasitet']) ?></td>
	 <td><?php echo ($r['status']); ?></td>
	 <td><?php echo ($r['harProsjektor']); ?></td>
	</tr>
</table>
<?php endwhile; ?>
			</div>
		</div>
		<footer>
			<div id="footer"></div>
		</footer>
	</body>
</html>
