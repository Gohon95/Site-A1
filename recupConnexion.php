<?php

session_start();

$login = $_POST["logmail"];
$mdp = $_POST["mdp"];

$con = mysqli_connect("localhost", "root", "", "tintinsite");

$req = "select * from user where mail= '$login' and password='$mdp'";

$result = mysqli_query($con, $req);


if (mysqli_num_rows($result) > 0) {
	$_SESSION["user"] = $login;
	header("location: index.php");
} else {
	$_SESSION["user"] = null;
	header("location: index.php?erreur=1");
}
