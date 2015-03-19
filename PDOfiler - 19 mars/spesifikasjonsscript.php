<?php
$inactive = 5; 
ini_set('session.gc_maxlifetime', $inactive);

session_start();
echo "session started";

if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}
$_SESSION['testing'] = time(); // Update session
	echo time();
if (session_destroyed() = true) {
}
include 'connection.php';
$kapasitet = $_POST['kapasitet'];
$prosjektor = $_POST['harProsjektor'];

$x = $dbTilkobling->prepare("SELECT * ");
$x->bindParam(1, $kapasitet);
$x->bindParam(2, $prosjektor);
$x->execute();
$y = $x->fetch(PDO::FETCH_NUM);
if($y > 0){
	header("Location: success.php");
}
else {
	echo "Ugyldig verdier";
}

$sql = 'SELECT * FROM rom WHERE harProsjektor="ja"';

$q = $dbTilkobling->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
while ($r = $q->fetch()){
	 echo ($r['romnummer']);
	 echo ($r['kapasitet']);
	 echo ($r['status']);
	 echo ($r['harProsjektor']);
}
?>