<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $lista['id_programa'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" data-background-color="purple">
			<div class="modal-header" style="background: #00B4DB;  /* fallback for old browsers */
						background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
						background: linear-gradient(to right, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
				<h3 style="color:white;"  class="justify-content-center:">Actualizar Datos</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="../../Modelo/Datos_programa/update.php" method="post">
					<input type="hidden" class="form-control" value="<?php echo $lista['id_programa'] ?>"  name="id_programa" required > 

					<div class="input-group col-sm-12 col-md-10 col-form-label">
							<div class="input-group-prepend">
										<span class="input-group-text ">
										<i class="flaticon-home"></i>
										</span>
							</div>
							<input type="text" class="form-control" value="<?php echo $lista['nombre_progra'] ?>" name="nombre_progra" required >
					</div>
					<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button type="submit" class="btn btn-success">Guardar Cambios</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>