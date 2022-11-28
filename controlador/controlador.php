<?php

    function conectar_bd($clave,$basedatos)
    {
        $conexion = new mysqli('localhost', 'root', $clave, $basedatos);   

        if ($conexion->connect_error)
        {
            die('Error de Conexion (' . $conexion->connect_error . ') '. $conexion->connect_error);
        }
    return $conexion;
    }

    function consulta ($conexion,$consulta_sql)
    {
        $resultado=$conexion->query($consulta_sql); 

        if (!$resultado)
        {
            echo 'No se pudo ejecutar la consulta: ' . $conexion->error;
            exit;
        }

        return $resultado;
    }
?>

<?php
class consultas extends dbconexion{
    public function select_pasante()
    {
        $sqlp = dbconexion::conexion()->prepare("SELECT * FROM aprendiz");
        $sqlp->execute();
        return $array = $sqlp->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insert_pasante($id,$documento,$nombre,$telefono,$correo,$direccion,$jorna,$ambiente,$ficha)
    {
        $sql = dbconexion::conexion()->prepare("INSERT INTO `aprendiz`(`id_aprendiz`, `documento`, `nombre`, `telefono`, `correo`, `direccion`, `jornada`, `id_ambiente`, `id_fichas`) VALUES 
        ('$id','$documento','$nombre', '$telefono', '$correo','$direccion','$jorna','$ambiente','$ficha')");
        if ($sql->execute()) {
            $resultado = self::select_pasante();
            return $resultado;
        }
    }
    public function obtener_pasante($id){
        $sql = dbconexion::conexion()->prepare("SELECT * FROM aprendiz WHERE id_aprendiz='".$id."'");
        if($sql->execute()){
            return $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }else {
            return "error";
        }
    }
    public function update_pasante($id,$nombre,$apellidos,$sexo){
        $sql = dbconexion::conexion()->prepare("UPDATE `aprendiz` SET `documento`='$documento',`nombre`='$nombre',`telefono`='$telefono',`correo`='$correo',`direccion`='$direccion',`jornada`='$jornada' WHERE id_aprendiz='$id'");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $resultado = self::select_persona();
            return $resultado;
        }else{
            return "error";
       }
    }
    public function eliminar_pasante($id){
        $sql=dbconexion::conexion()->prepare("DELETE FROM aprendiz WHERE id_aprendiz='".$id."'");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $resultado = self::select_persona();
            return $resultado;
            // return "Se elimino correctamente el registro";
        }else{
            return "Ocurrio un problema";
        }
    }
   
}
?>
