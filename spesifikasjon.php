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
		<div id="searchWin">
			<div id="stepWin">
				<p id="n1" class="inactiveNum">1</p>
				<p id="n2" class="activeNum">2</p>
				<p id="n3" class="inactiveNum">3</p>
				<div id="c1" class="inactiveCircle"></div>
				<div id="c2" class="activeCircle"></div>
				<div id="c3" class="inactiveCircle"></div>
			</div>
			<div id="searchHolder">
				<form action="success.php" method="POST">
					Dato: <input type="date" name="dato"/></br></br>
					Velg kapasitet (2-4): <input type="text" name="kapasitet"/></br></br>
					Skal rommet ha prosjektor? (Ja eller Nei): <input type="text" name="harProsjektor"/></br></br>
					<input id="searchButton" type="submit" value="Søk!"/>
				</form>
				<form action ="main.php" method ="POST">
			</form>
			</div>
		</div>
		<footer>
			<div id="footer"></div>
		</footer>
	</body>
</html>
<!--?php
$inactive = 5; 
ini_set('session.gc_maxlifetime', $inactive);

session_start();
echo "session started";

if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
	echo "session destroyed";
}
$_SESSION['testing'] = time(); // Update session
	echo time();
?>-->

