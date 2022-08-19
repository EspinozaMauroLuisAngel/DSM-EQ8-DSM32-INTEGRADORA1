<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$nombre_curso = (isset($_POST['nombre_curso'])) ? $_POST['nombre_curso'] : '';
$contenido_curso = (isset($_POST['contenido_curso'])) ? $_POST['contenido_curso'] : '';
$describcion_general = (isset($_POST['describcion_general'])) ? $_POST['describcion_general'] : '';
$nivel = (isset($_POST['nivel'])) ? $_POST['nivel'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id_curso = (isset($_POST['id_curso'])) ? $_POST['id_curso'] : '';


switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO cursos(nombre_curso, contenido_curso, describcion_general, nivel) VALUES ('$nombre_curso','$contenido_curso','$describcion_general', '$nivel')";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT nombre_curso, contenido_curso, describcion_general, nivel, id_curso FROM cursos ORDER BY id_curso DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE cursos SET nombre_curso='$nombre_curso', contenido_curso='$contenido_curso', describcion_general='$describcion_general', nivel='$nivel' WHERE id_curso='$id_curso' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT nombre_curso, contenido_curso, describcion_general, nivel, id_curso FROM cursos WHERE id_curso='$id_curso' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM cursos WHERE id_curso='$id_curso' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
                
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
