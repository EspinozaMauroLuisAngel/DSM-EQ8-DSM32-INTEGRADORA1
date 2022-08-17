<?php
include_once '../../../vistas/bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$namee = (isset($_POST['namee'])) ? $_POST['namee'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$username = (isset($_POST['username'])) ? $_POST['username'] : '';
$passwordd = (isset($_POST['passwordd'])) ? $_POST['passwordd'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO registro(namee, email, username, passwordd) VALUES ('$namee','$email','$username', '$passwordd')";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT namee, email, username, passwordd, id FROM registro ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE registro SET namee='$namee', email='$email', username='$username', passwordd='$passwordd' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT namee, email, username, passwordd, id FROM registro WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM registro WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
