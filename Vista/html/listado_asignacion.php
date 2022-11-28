<?php include 'Vista/cabecera.php'; ?>
<?php  
include("../../Modelo/conexion.php");
$result=("SELECT aprendiz.nombre, aprendiz.id_aprendiz,aprendiz.documento, telefono, correo, direccion, estado, ambiente_aprendizaje.nombre_ambiente, fichas.numero_ficha, matricula_aprendiz_ambiente.fecha_registro,id_matricula, matricula_aprendiz_ambiente.fecha_inicio, matricula_aprendiz_ambiente.fecha_fin FROM fichas INNER JOIN (aprendiz INNER JOIN (matricula_aprendiz_ambiente INNER JOIN ambiente_aprendizaje ON matricula_aprendiz_ambiente.id_ambiente=ambiente_aprendizaje.id_ambiente)ON aprendiz.id_aprendiz=matricula_aprendiz_ambiente.id_aprendiz) ON fichas.id_fichas=aprendiz.id_fichas;")
?>

<div class="page-inner">					
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center">
					<h4 class="card-title">Asignacion de Ambientes</h4>
					<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#myModal">
						<i class="fa fa-plus"></i>
						Registrar
					</button>
				</div>
			</div>
			<div class="card-body">
				<!-- Modal registro -->
                <?php  include("../Modal_Aprendiz/asignar_ambiente.php");?>

				<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover" >
						<thead  class="">
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>Documento</th>
								<th>Area</th>
								
								<th>Fecha Registro</th>
                                <th>Inicio de Pasantia</th>
                                <th>Final de Pasantia</th>
								<th>Estado</th>
								<th style="width:5%;  text-align:center;">Acciones</th>
							</tr>
						</thead>
						<tbody>
						
						<?php 	
						$contador =1;
						
						foreach($conn ->query($result) as $lista){?>
						<?php $fecha_actual = new DateTime(date('Y-m-d'));//nueva variable para vencimiento//
						$fecha_final = new DateTime($lista['fecha_fin']);
						$dias = $fecha_actual->diff($fecha_final)->format('%r%a');
						$status =$lista['estado'];
						  // Si la fecha final es igual a la fecha actual o anterior
						  if ($dias <= 0) {
							$status= '<span class="rounded-pill badge badge-danger bg-gradient-teal px-3">Inactivo</span>';
						} elseif ($dias > 15) {
							$status= '<span class="rounded-pill badge badge-success bg-gradient-teal px-3">Activo</span>';
						} elseif ($dias <= 15) {
							$status= '<span class="rounded-pill badge badge-warning bg-gradient-teal px-3">Vence pronto</span>';
						} else {
							$status = '';
						}
						?>
							
							<tr>
								<td><?php echo $contador++ .')'; ?></td>
								<td><?php echo $lista['nombre'] ?></td>
								<td><?php echo $lista['documento'] ?></td>
								<td><?php echo $lista['nombre_ambiente'] ?></td>
								
								<td><?php echo $lista['fecha_registro'] ?></td>    
                                <td><?php echo $lista['fecha_inicio'] ?></td>    
                                <td><?php echo $lista['fecha_fin'] ?></td> 
								<td><?php echo $status ?></td>  
								
                                
								<td>
									<div class="form-button-action">
										<button type="button"   class="btn btn-link btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $lista['id_matricula'] ?>">
											<i class="fas fa-user-edit"  style="font-size:30px"></i>
										</button>
										<button  type="button"  class="btn btn-link"><a href="../../Modelo/Datos_matricula/delete.php?id=<?= $lista['id_matricula']?> " class=" btn-del" >
										<i class="fas fa-user-times" style="font-size:30px;color:red" ></i></a>
										</button>
									</div>
								</td>
							</tr>
                                <?php  include("../Modal_Aprendiz/editar_apre.php");?>
                                <?php  include("../Modal_Aprendiz/eliminar_apre.php");?>
                               
                                                    

								
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


<script src="../Estilos/js/matricula/funciones.js"></script>


<?php include 'Vista/footer.php'; ?>