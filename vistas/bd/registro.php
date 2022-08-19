<?php 
include("conexion1.php");

$namee = (isset($_POST['namee'])) ? $_POST['namee'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$username = (isset($_POST['username'])) ? $_POST['username'] : '';
$passwordd = (isset($_POST['passwordd'])) ? $_POST['passwordd'] : '';;

$passwordd= md5 ($passwordd); 

$consulta = "INSERT INTO registro(namee, email, username, passwordd) VALUES ('$namee','$email','$username', '$passwordd')";
$resultado = mysqli_query($conex,$consulta);


