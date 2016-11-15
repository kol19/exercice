<?php 

require('config.php');

if(empty($_POST['name']) || empty($_POST['password'])) {
	header('Location:login.php?error=1');
}
else {
	$name = $_POST['name'];
	//echo $name;
	$password = $_POST['password'];
	//echo $password;
	
	if($name == LEBONLOGIN && $password == LEBONPASS) {
		header('Location:accueil.php');
	} else {
		header('Location:login.php?error=2');
	}

}



	/*$nom=strtoupper("aaa");
	$pass=strtoupper("bbb");
	$noms=trim(strtoupper($_POST['name']));
	$passs=trim(strtoupper($_POST['password']));

	if($nom==$noms && $pass==$passs) {
		echo "message collecté";
	}
	else {
	*/
	
	?>