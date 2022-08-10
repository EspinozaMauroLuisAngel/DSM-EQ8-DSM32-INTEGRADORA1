<?php
session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$namee = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$username = (isset($_POST['username'])) ? $_POST['username'] : '';
$passwordd = (isset($_POST['contraseña'])) ? $_POST['contraseña'] : '';

$pass = md5($passwordd); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD

$consulta = "SELECT * FROM registro WHERE namee='$nombre' WHERE email='$email' WHERE username='$username' AND contraseña='$pass' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;
