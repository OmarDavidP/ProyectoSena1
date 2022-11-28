<?php
include("../conexion.php");



$id_fichas=(isset($_POST['id_fichas']))?$_POST['id_fichas']:"";
$numero_ficha=$_POST['numero_ficha'];
$id_programa=$_POST['id_programa'];

$sql=" INSERT INTO fichas (`id_fichas`, `numero_ficha`, `id_programa`) VALUES ('$id_fichas','$numero_ficha','$id_programa')";
$query= mysqli_query($conn,$sql);

if($query){
   echo"Registro exitoso";
    
}else {
    echo"Error en la insercion";

}
?>	
  