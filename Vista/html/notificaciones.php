<?php
    
    require_once('../../Modelo/conex.php');

    date_default_timezone_set('America/Bogota');
    $database = new Database();
    $db = $database->conectar();

    $numNotificacao=0;

    $sql = "SELECT aprendiz.nombre AS Aprendiz, ambiente_aprendizaje.nombre_ambiente AS Area_Pasantia, matricula_aprendiz_ambiente.estado, matricula_aprendiz_ambiente.fecha_inicio AS Inicio_Pasantia, matricula_aprendiz_ambiente.fecha_fin AS Fin_Pasantia FROM ambiente_aprendizaje INNER JOIN(aprendiz INNER JOIN matricula_aprendiz_ambiente ON aprendiz.id_aprendiz=matricula_aprendiz_ambiente.id_aprendiz) ON ambiente_aprendizaje.id_ambiente=aprendiz.id_ambiente WHERE fecha_fin BETWEEN curdate() AND date_add(curdate(), INTERVAL 2 week) ";
    $req = $db->prepare($sql);
    $req->execute();
    $numNotificacao = $req->rowCount();
?>

<li class="nav-item dropdown hidden-caret">
    <a class="nav-link dropdown-toggle" href="#" id="notifDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-bell"></i>
        <span  class="notification"><?php echo "$numNotificacao"; ?></span>
    </a>
    <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
    <?php
    while ($dados = $req->fetch(PDO::FETCH_ASSOC)) {
        $nombre  = $dados['Aprendiz'];
        $area = $dados['Area_Pasantia'];
        $estado = $dados['estado'];															
        $data_inicio = $dados['Inicio_Pasantia'];
        $data_termino = $dados['Fin_Pasantia'];
        

        $data_inicio = date('d/m/Y', strtotime($data_termino));

        echo "
        <div class=\"alert alert-info\" role=\"alert\" width='200' >
        <form class=\"form-horizontal\" method=\"POST\" action=\"menu/aceita.php\">
        
                <i class=\"fa fa-bell fa-fw\"></i> 
                
                <center>AVISO IMPORTANTE</center> 
                $nombre, de $area se encuentra $estado y culmina el dia $data_termino 
            
                <br>
                <input type=\"hidden\" name=\"Aprendiz\" class=\"form-control\" id=\"Aprendiz\" value=\"$nombre\">
                <input type=\"hidden\" name=\"Area_Pasantia\" class=\"form-control\" id=\"Area_Pasantia\" value=\"$area\">
                <input type=\"hidden\" name=\"estado\" class=\"form-control\" id=\"estado\" value=\"$estado\">
                <input type=\"hidden\" name=\"fecha_inicio\" class=\"form-control\" id=\"fecha_inicio\" value=\"$data_inicio\">
                <input type=\"hidden\" name=\"fecha_fin\" class=\"form-control\" id=\"fecha_fin\" value=\"$data_termino\">
                
                <button type=\"submit\" class=\"btn btn-primary\">Aceptar</button>
        </form>
                <form class=\"form-vertical\" method=\"POST\" action=\"menu/recusa.php\">
                <div class=\"buttonAlign\">
                <input type=\"hidden\" name=\"\" class=\"form-control\" id=\"\" value=\"\">
                <button type=\"submit\" class=\"btn btn-danger\">Eliminar</button>
                </div>
                </form>
        </div>";
    }
    ?>
    <center><a href="">Ver todas las notificaciones</a></center>
    </ul>
</li>

