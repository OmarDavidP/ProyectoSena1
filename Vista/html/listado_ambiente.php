<?php include 'Vista/cabecera.php'; ?>

<?php  

$id=(isset($_POST['id_ambiente']))?$_POST['id_ambiente']:"";
$area=(isset($_POST['id_area']))?$_POST['id_area']:"";
$fecha=(isset($_POST['fecha_registro']))?$_POST['fecha_registro']:"";
$ambiente=(isset($_POST['nombre_ambiente']))?$_POST['nombre_ambiente']:"";
$capacidad=(isset($_POST['capacidad']))?$_POST['capacidad']:"";
$descripcion=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("../../modelo/conexion.php");

switch ($accion) {
	case 'agregar':
	  
	
		$result = $conn->query("");
		echo("<script> 
	Swal.fire({
	  position: 'top',
	  icon: 'success',
	  title: 'Aprendiz registrado correctamente',
	  showConfirmButton: false,
	  timer: 1500
	})</script>");
		
	break;
}
$result="select ambiente_aprendizaje.id_area,ambiente_aprendizaje.id_ambiente, ambiente_aprendizaje.nombre_ambiente, ambiente_aprendizaje.capacidad, ambiente_aprendizaje.descripcion, areapasantia.nombre FROM ambiente_aprendizaje INNER JOIN areapasantia ON ambiente_aprendizaje.id_area=areapasantia.id_area";
?>


<div class="page-inner">					
                    <div class="col-md-12">
                              <div class="card">
                                        <div class="card-header">
                                                  <div class="d-flex align-items-center">
                                                            <h4 class="card-title">Listado de Ambientes</h4>
                                                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                                                      <i class="fa fa-plus"></i>
                                                                      Registrar
                                                            </button>
                                                  </div>
                                        </div>
                                        <div class="card-body">
                                                  <!-- Modal registro -->
                                                  <?php  include("../Modal_Ambiente/registrar_ambiente.php");?>
                                                  

                                                  <div class="table-responsive">
                                                  <table id="add-row" class="display table table-striped table-hover" >
                                                            <thead  class="">
                                                                      <tr>
                                                                                <th>#</th>
                                                                                <th>Area</th>
                                                                                <th>Ambiente</th>   
                                                                                <th>Capacidad</th>                                                                       
                                                                                <th>Descripcion</th>     
                                                                                <th style="width:5%">Acciones</th>
                                                                      </tr>
                                                            </thead>
                                                            <tbody>
                                                            
                                                            <?php 	
                                                            $contador =1;
                                                            foreach($conn ->query($result) as $lista){?>
                                                                      
                                                                      <tr>
                                                                                <td><?php echo $contador++ .')'; ?></td>
                                                                                <td><?php echo $lista['nombre'] ?></td>
                                                                                <td><?php echo $lista['nombre_ambiente'] ?></td>
                                                                                <td><?php echo $lista['capacidad'] ?></td>
                                                                                <td><?php echo $lista['descripcion'] ?></td>
                                                                                                                                                                
                                                                                <td>
                                                                                    <div class="form-button-action">
                                                                                      <button type="button"   class="btn btn-link btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $lista['id_ambiente'] ?>">
                                                                                      <i class="fas fa-user-edit"  style="font-size:30px"></i>
                                                                                      </button>
                                                                                      <button  type="button"  class="btn btn-link"><a href="../../Modelo/Datos_ambiente/delete.php?id=<?= $lista['id_ambiente']?> " class=" btn-del" >
                                                                                      <i class="fas fa-user-times" style="font-size:30px;color:red" ></i></a>
                                                                                      </button>
                                                                                    </div>
                                                                                </td>
                                                                      </tr>
                                                                      <?php  include("../Modal_Ambiente/editar_ambiente.php");?>
                                                                      <?php  include("../Modal_Ambiente/eliminar_ambiente.php");?>
                                                                      

                                                                                
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
</div><script src="../Estilos/js/ambiente/funciones.js"></script>

<?php include 'Vista/footer.php'; ?>