<html>
	<title>
	EXERCICE 1 - TP 2 
	</title>
	<body>
	
	<?php
	
	if (!empty($_GET['error'])) {
		if ($_GET['error'] == 1) {
			echo "Erreuur ".$_GET['error']." Veuillez saisir un login et un mot de passe<br><br>";
		} else {
			echo "Erreuur ".$_GET['error']." Erreur de login/mot de passe<br><br>";
		}
	} 
	?>
	
		<form action = "validation.php" method = "POST">
				Login <input type = "text" name = "name"><br><br>
				Password <input type = "password" name = "password"><br><br>
				<input type = "submit" value = "Se connecter">
			</form> 			
	</body>
</html>