<!DOCTYPE HTML> 
<html> 
	<head> 
		<title>Registrere Ny Bruker</title>
		<meta charset="utf-8">
	</head>
	<body>	
		<div id="Sign-Up"> 
			<fieldset style="width:20%">
				<legend>Registrering</legend> 
				<table border="2"> <tr> 
					<form method="POST" action="connect.php"> 
					<td>StudentID</td><td> <input type="text" name="studID"></td> </tr> <tr>  
					<td>Brukernavn</td><td> <input type="text" name="user"></td> </tr> <tr> 	
					<td>Passord</td><td> <input type="password" name="pass"></td> </tr> <tr> 
					<td>
					<input id="knapp" type="submit" name="submit" value="Registrer"></td> </tr> 
					</form> 
				</table> 
			</fieldset> 
		</div> 
	</body> 
</html>