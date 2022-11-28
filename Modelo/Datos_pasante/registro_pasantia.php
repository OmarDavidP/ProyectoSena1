<!-- Inicio Insert para asignar ambientes de pasantia -->
<?php  

include("../conexion.php");
$id_m=(isset($_POST['id_matricula']))?$_POST['id_matricula']:"";
$id_ap=(isset($_POST['id_aprendiz']))?$_POST['id_aprendiz']:"";
$id_am=(isset($_POST['id_ambiente']))?$_POST['id_ambiente']:"";
$estado=(isset($_POST['estado']))?$_POST['estado']:"";
$FechaR=(isset($_POST['fecha_registro']))?$_POST['fecha_registro']:"";
$FechaI=(isset($_POST['fecha_inicio']))?$_POST['fecha_inicio']:"";
$FechaF=(isset($_POST['fecha_fin']))?$_POST['fecha_fin']:"";

$adicion=(isset($_POST['adicionar']))?$_POST['adicionar']:"";


switch ($adicion) {
	case 'Asignar':
	  
		$result = $conn->query("");
		
        echo "<script type='text/javascript'>
        window.location='../../Vista/html/listado_pasantes.php';
        </script>";

		
	break;
}

?>

<!-- Fin Insert para asignar ambientes de pasantia -->