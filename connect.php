<?php

$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "dbnavn";

@mysql_connect("$db_host", "$db_username", "$db_pass","$db_name") or die ("Could not connect to MySQL");
@mysql_select_db("$db_name") or die ("No Database");



function NyBruker() { 
	$studentID = $_POST['studID']; 
	$userName = $_POST['user']; 
	$password = $_POST['pass']; 
	$query = "INSERT INTO users (studentnummer,username,password) VALUES ('$studentID','$userName','$password')"; 
	$data = mysql_query ($query)or die(mysql_error()); 
	if($data) { echo "Registrering fullført."; 
}
}
?>

<form action="login.php" method="POST">
	<input type="submit" value="Login!"/>
</form> 
<?php
	 function Registrer() 
	 { if(!empty($_POST['user'])) 
	 { $query = mysql_query("SELECT * FROM users WHERE userName = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error()); 
	 if(!$row = mysql_fetch_array($query) or die(mysql_error())) { NyBruker(); } 
	 else { echo "Du er allerede registrert."; } } } if(isset($_POST['submit'])) { Registrer(); } 
?>