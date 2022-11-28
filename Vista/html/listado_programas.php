<?php include 'Vista/cabecera.php';?>
<?php  
include("../../modelo/conexion.php");

$result="SELECT * FROM `programas` ORDER BY id_programa DESC;";
?>


<div class="page-inner">					
          <div class="col-md-12">
                    <div class="card">
                              <div class="card-header">
                                        <div class="d-flex align-items-center">
                                                  <h4 class="card-title">Listado de Programas</h4>
                                                  <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                                            <i class="fa fa-plus"></i>
                                                            Registrar
                                                  </button>
                                        </div>
                              </div>
                              <div class="card-body">
                                        <!-- Modal registro -->
                                        <?php  include("../Modal_Programa/registrar_Programa.php");?>
                                        

                                        <div class="table-responsive">
                                                  <table id="add-row" class="display table table-striped table-hover" >
                                                            <thead  class="">
                                                                      <tr>
                                                                        <th>#</th>
                                                                        <th>Nombre del programa</th>                                                                               
                                                                        <th style="width:5%">Acciones</th>
                                                                      </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                            <?php 	
                                                            $contador =1;
                                                            foreach($conn ->query($result) as $lista){?>
                                                                      
                                                                      <tr>
                                                                                <td><?php echo $contador++ .')'; ?></td>
                                                                                <td><?php echo $lista['nombre_progra'] ?></td>
                                                                                
                                                                                <td>
                                                                                  <div class="form-button-action">
                                                                                      <button type="button"   class="btn btn-link btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $lista['id_programa'] ?>">
                                                                                                <i class="fas fa-user-edit"  style="font-size:30px"></i>
                                                                                      </button>
                                                                                      <button  type="button"  class="btn btn-link"><a href="../../Modelo/Datos_programa/delete.php?id=<?= $lista['id_programa']?> " class=" btn-del" >
                                                                                      <i class="fas fa-user-times" style="font-size:30px;color:red" ></i></a>
                                                                                      </button>
                                                                                  </div>
                                                                                </td>
                                                                      </tr>
                                                                      <?php  include("../Modal_Programa/editar_Programa.php");?>      
                                                                      <?php 
                                                                      }
                                                                      ?>
                                                            </tbody>
                                                  </table>
                                        </div>
                              </div>
                    </div>
          </div>
          </div>
          </div>



<script src="../Estilos/js/programas/funciones.js"></script>


<?php include 'Vista/footer.php';?>