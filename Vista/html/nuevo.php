<?php include 'header.php'; ?>

<div class="page-inner">
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-primary card-round" style="height: 10rem;">
                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-5">
                            <a href="listado_pasantes.php">
                                <div class="icon-big text-center">
                                    <i class="flaticon-user-5" style='font-size:80px'></i>
                                </div>
                            </a>
                        </div>
                            <?php 
                                include("../../Modelo/conexion.php");
                            
                                $sql="SELECT COUNT(aprendiz.id_aprendiz) as cantidad FROM aprendiz";
                                //SELECT COUNT(instructor.id_instructor) as cant FROM instructor//
                            ?>
        
                            <div class="col-7 col-stats">
                            <?php 
                            foreach($conn ->query($sql) as $lista){
                            ?>  
                            <div class="numbers">
                                <p class="card-category">Pasantes Registrados</p>
                                <h3 class="card-title"><?php echo $lista['cantidad'] ?></h3>
                                <p class="card-text">Gestion de Pasantes</p>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-info card-round" style="height: 10rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <a href="listado_instructor.php">
                                <div class="icon-big text-center">
                                    <i class="fas fa-chalkboard-teacher" style='font-size:80px; margin-top:25px;'></i>
                                </div>
                            </a>
                        </div>
                        <?php 
    
                        $sql1="SELECT COUNT(instructor.id_instructor) as cant FROM instructor";
                        ?>
                        <div class="col-7 col-stats">
                        <?php 
                        foreach($conn ->query($sql1) as $lista){
                        ?> 
                            <div class="numbers">
                                <p class="card-category">Instructores Registrados</p>
                                <h3 class="card-title"><?php echo $lista['cant'] ?></h3>
                                <p class="card-text">Gestion de Instructores</p>
                            </div>
                            <?php 
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-success card-round" style="height: 10rem;">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <a href="listado_asignacion.php">
                                <div class="icon-big text-center">
                                    <i class="flaticon-desk" style='font-size:80px'></i>                                   
                                </div>
                            </a>
                        </div>
                        <?php 
    
                        $sql2="SELECT COUNT(matricula_aprendiz_ambiente.id_matricula) as canti FROM matricula_aprendiz_ambiente";
                        ?>
                        <div class="col-7 col-stats">
                        <?php 
                        foreach($conn ->query($sql2) as $lista){
                        ?> 
                            <div class="numbers">
                                <p class="card-category">Ambientes Asignados</p>
                                <h3 class="card-title"><?php echo $lista['canti'] ?></h3>
                                <p class="card-text">Gestionar Areas de pasantias</p>
                            </div>
                            <?php 
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-secondary card-round" style="height: 10rem;">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <a href=""  data-toggle="" data-target="">
                                <div class="icon-big text-center">
                                    <i class="fas fa-cloud-upload-alt" style='font-size:80px; margin-top:20px;'></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Carga Masiva</p>
                                <h4 class="card-title"></h4>
                                <p class="card-text">Subir archivos</p>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoca modal reporte -->
<?php  include("../Modal_Reportes/reportes.php");?>
<!-- Invoca modal reporte -->

<!-- graficos -->
<div class="page-inner">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="height: 27rem;">
                <div class="card-header">
                    <div class="card-title">Areas de pasantias</div>
                </div>
                <div class="card-body">
                    <div class="" id="btnBD"> 
                        <!--En este container se muestran los gráficos-->
                        <div id="contenedor-modal" style="height: 25rem;"  ></div>
                    </div>     
                </div>
            </div>
        </div>
      
        <div class="col-md-4">
            <div class="card" style="height:27rem;"  >
                <div class="card-header">
                    <h4 class="card-title">Ultimos Registros</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                                <i class="flaticon-user-4"></i>
                               Pasantes  
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab-icon" data-toggle="pill" href="#pills-profile-icon" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                                <i class="fas fa-chalkboard-teacher"></i>
                                Instructores
                            </a>
                        </li>                       
                        <li class="nav-item">                       
                            <a class="nav-link" id="pills-contact-tab-icon" data-toggle="pill" href="#pills-contact-icon" role="tab" aria-controls="pills-contact-icon" aria-selected="false">
                                <i class="flaticon-home"></i>
                               Ambientes de pasantia
                            </a>
                        </li>
                    </ul>

                    <?php $Apre="SELECT * FROM aprendiz ORDER BY id_aprendiz DESC LIMIT 3";  ?>
                    <div class="tab-content mt-1 mb-1" id="pills-with-icon-tabContent">
                        <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
                            <?php foreach($conn ->query($Apre) as $lista){?>  
                                <div class="card-list">
                                        <div class="item-list">                              
                                            <div class="info-user ml-3">
                                                <div class="username"><?php echo $lista['nombre'] ?></div>
                                                <div class="status"><?php echo $lista['telefono'] ?></div>
                                            </div>
                                            <button class="btn btn-icon btn-primary btn-round btn-xs"  data-toggle="modal" data-target="#exampleModalCenter<?php echo $lista['id_aprendiz'] ?>">
                                                <i class="fa fa-plus"></i>
                                            </button>  
                                        </div> 
                                </div>
                            <?php  } ?>
                        </div>

                        <?php $Instr="SELECT * FROM instructor ORDER BY id_instructor DESC LIMIT 3";  ?>
                        <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-tab-icon">
                            <div class="card-list">
                                 <?php 
                                foreach($conn ->query($Instr) as $lista){
                                ?> 
                                <div class="item-list">                              
                                    <div class="info-user ml-3">
                                        <div class="username"><?php echo $lista['nombre'] ?></div>
                                        <div class="status"><?php echo $lista['telefono'] ?></div>
                                    </div>
                                    <button class="btn btn-icon btn-primary btn-round btn-xs">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                        <?php $Ambiente="SELECT aprendiz.nombre, aprendiz.id_aprendiz, aprendiz.documento, ambiente_aprendizaje.nombre_ambiente, fichas.numero_ficha, matricula_aprendiz_ambiente.fecha_registro, matricula_aprendiz_ambiente.fecha_inicio, matricula_aprendiz_ambiente.fecha_fin FROM fichas INNER JOIN (aprendiz INNER JOIN (matricula_aprendiz_ambiente INNER JOIN ambiente_aprendizaje ON matricula_aprendiz_ambiente.id_ambiente=ambiente_aprendizaje.id_ambiente)ON aprendiz.id_aprendiz=matricula_aprendiz_ambiente.id_aprendiz) ON fichas.id_fichas=aprendiz.id_fichas LIMIT 3;";  ?>
                        <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
                            <div class="card-list">
                                <?php 
                                foreach($conn ->query($Ambiente) as $list){
                                ?> 
                                <div class="item-list">                              
                                    <div class="info-user ml-3">
                                        <div class="username"><?php echo $list['nombre'] ?></div>
                                        <div class="status"><?php echo $list['nombre_ambiente'] ?></div>
                                    </div>
                                    <button class="btn btn-icon btn-primary btn-round btn-xs">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    

  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="JQuery/jquery-3.3.1.min.js"></script>
        <script src="popper/popper.min.js"></script>
        <script src="Bootstrap_4/js/bootstrap.min.js"></script>     
         <!-- Highcharts JS -->              
        <script src="pluggins/Highcharts_7.0.3/code/highcharts.js"></script>
        <script src="pluggins/Highcharts_7.0.3/code/modules/exporting.js"></script>
        <script src="pluggins/Highcharts_7.0.3/code/modules/export-data.js"></script>        
        
        <script src="pluggins/Highcharts_7.0.3/code/modules/drilldown.js"></script>
        <script src="codigoJS.js"></script>

<?php include 'footer.php'; ?>