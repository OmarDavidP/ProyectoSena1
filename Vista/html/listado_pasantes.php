<?php include 'Vista/cabecera.php';?>

<?php  
include("../../modelo/conexion.php");
$result="SELECT * FROM `aprendiz` ORDER BY id_aprendiz DESC;";
?>


<div class="page-inner">					
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Listado de Pasantes</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Registrar
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal registro -->
									<?php  include("../Modal_Aprendiz/registrar_apre.php");?>							
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead  class="">
											<tr>
											<th>#</th>
											<th>Documento</th>
											<th>Nombre</th>
											<th>Telefono</th>
											<th>Correo</th>
											<th>Direccion</th>
											<th style="width:5%; text-align:center;">Acciones</th>
											</tr>
											</thead>
											<tbody>
											
											<?php 	
											$contador =1;
											foreach($conn ->query($result) as $lista){?>
												
												<tr>
													<td><?php echo $contador++ .')'; ?></td>
													<td><?php echo $lista['documento'] ?></td>
													<td><?php echo $lista['nombre'] ?></td>
													<td><?php echo $lista['telefono'] ?></td>
													<td><?php echo $lista['correo'] ?></td>
													<td><?php echo $lista['direccion'] ?></td>    
													<td>
													<div class="form-button-action">
														<button type="button"   class="btn btn-link btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $lista['id_aprendiz'] ?>">
															<i class="fas fa-user-edit"  style="font-size:30px"></i>
														</button>

														<button  type="button"  class="btn btn-link"><a href="../../Modelo/Datos_pasante/delete.php?id=<?= $lista['id_aprendiz']?> " class=" btn-del" >
														<i class="fas fa-user-times" style="font-size:30px;color:red" ></i></a>
														</button>

													</div>
													</td>
												</tr>
												<?php  include("../Modal_Aprendiz/editar_apre.php");?>																								
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
				

<script src="../Estilos/js/pasantes/funciones.js"></script>

				
<?php include 'Vista/footer.php';?>