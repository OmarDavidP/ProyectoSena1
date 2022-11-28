<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $lista['id_ambiente'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			<form action="" method="post">
                                        <div class="form-group row">
                                        <label class="col-sm-4 col-md-2 col-form-label">Area de pasantia</label>
                                        <?php              
                                        $resultado=consulta($conn,"SELECT * FROM `areapasantia`");
                                        ?>
                                        <select style="" class="form-control" value="<?php echo $lista['id_area'] ?>" name="id_area">
                                        <?php
                                        while($fila=$resultado->fetch_object())
                              
                                        {
                                        ?>
                                        <option  value="<?php echo $fila->id_area ?>"><?php echo $fila->nombre ?></option name="id_area">
                                                                                          
                                        <?php
                                        }
                                        ?>
                                                  </select>
                                        </div>
                                        <div class="form-group row">
                                                  <label class="col-sm-4 col-md-2 col-form-label">Ambiente de pasantia</label>
                                                  
                                                  <input class="form-control" placeholder=" Escribe el area de pasantia" value="<?php echo $lista['nombre'] ?>"  type="text" name="nombre" >
                                                  
                                        </div>
                                                  <div class="form-group row">
                                                  <label class="col-sm-10 col-md-2 col-form-label">Fecha de registro</label>
                                               
                                                  <input class="form-control"  type="date" name="fecha_registro" >
                                                 
                                        </div>
                                        <div class="form-group row">
                                                  
                                                  <input class="form-control" placeholder="escribe el nombre del ambiente" value="<?php echo $lista['nombre_ambiente'] ?>"  type="text" name="nombre_ambiente" >
                                                 
                                        </div>
                                        <div class="form-group row">
                                                  
                                                  <input class="form-control" placeholder="capacidad del ambiente"  type="number" min="1" max="100" value="<?php echo $lista['capacidad'] ?>" name="capacidad" >
                                                  
                                        </div>
                                        <div class="form-group row">
                                        
                                        <textarea id="w3review" placeholder="Breve descripcion del ambiente" name="descripcion" rows="3" cols="50"></textarea>
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