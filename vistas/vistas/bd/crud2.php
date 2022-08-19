<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$nombreInstructor = (isset($_POST['nombreInstructor'])) ? $_POST['nombreInstructor'] : '';
$correoInstructor = (isset($_POST['correoInstructor'])) ? $_POST['correoInstructor'] : '';
$usuarioInstructor = (isset($_POST['usuarioInstructor'])) ? $_POST['usuarioInstructor'] : '';
$contraseñaInstructor = (isset($_POST['contraseñaInstructor'])) ? $_POST['contraseñaInstructor'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idInstructor = (isset($_POST['idInstructor'])) ? $_POST['idInstructor'] : '';


switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO instructores(nombreInstructor, correoInstructor, usuarioInstructor, contraseñaInstructor) VALUES ('$nombreInstructor','$correoInstructor','$usuarioInstructor', '$contraseñaInstructor')";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT nombreInstructor, correoInstructor, usuarioInstructor, contraseñaInstructor, idInstructor FROM instructores ORDER BY idInstructor DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE instructores SET nombreInstructor='$nombreInstructor', correoInstructor='$correoInstructor', usuarioInstructor='$usuarioInstructor', contraseñaInstructor='$contraseñaInstructor' WHERE idInstructor='$idInstructor' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT nombreInstructor, correoInstructor, usuarioInstructor, contraseñaInstructor, idInstructor FROM instructores WHERE idInstructor='$idInstructor' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM instructores WHERE idInstructor='$idInstructor' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
                
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
