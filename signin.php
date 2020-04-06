<?php

	session_start();
	
	$login = $_POST["mail"];
	$nom = $_POST["nom"];
	$mdp = $_POST["mdp"];


	$con = mysqli_connect("localhost", "root", "", "tintinsite");
	$req = "INSERT INTO user (mail, nom, password) VALUES ('$login', '$nom', '$mdp')";
	
	mysqli_query($con, $req);

	echo "Vous avez bien créé votre compte";
	echo $login; $nom;

	$req2 = "SELECT * FROM user where mail = '$login' and password = '$mdp'";
	$res = mysqli_query($con, $req2);

	if(mysqli_num_rows($res) > 0)
	{
		$_SESSION ["user"]=$login;
        $_SESSION['loggedin'] = true;
		header("location: index.php");
        
	}else {
		$_SESSION ["user"]=null;
        $_SESSION ['loggedin'] = false;
		header("location: login.php?erreur=1");
	}
