<?php
header('Content-type: application/json');
include_once 'conexion.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$result = array();

$consulta = "SELECT COUNT(matricula_aprendiz_ambiente.id_aprendiz) as cantidad, nombre_ambiente FROM matricula_aprendiz_ambiente INNER JOIN ambiente_aprendizaje ON ambiente_aprendizaje.id_ambiente=matricula_aprendiz_ambiente.id_ambiente GROUP BY ambiente_aprendizaje.id_ambiente ORDER BY cantidad";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
    array_push($result, array($fila["nombre_ambiente"], $fila["cantidad"] ));
}

print json_encode($result, JSON_NUMERIC_CHECK);
$conexion=null;