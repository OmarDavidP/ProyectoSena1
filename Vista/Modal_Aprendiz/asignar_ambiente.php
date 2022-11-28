<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header no-bd" style="background: #667db6;  /* fallback for old browsers */
				background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
				background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
				">
				<h10 class="modal-title" style="color:white;">
					<span class="fw-mediumbold">
					Asignar Ambiente De Pasantia</span> 
				</h10>
				
			</div>
			<div class="modal-body">
				<form action="" method="post">
				<div class="input-group col-sm-12 col-md-10 col-form-label">
						<div class="input-group-prepend">
							<span class="input-group-text ">
							<i class="icon-user"></i>
							</span>
						</div>
						<?php
						include('../../modelo/funciones.php');                    
						$resultado=consulta($conn,"SELECT * FROM `aprendiz`");
						?>
						<label for="id_aprendiz" class="form-label"></label>
						<select style="" class="form-control" name="id_aprendiz"  id="id_aprendiz">
						<option value="0">Seleccione Aprendiz</option>
						<?php
						while($fila=$resultado->fetch_object())
				
						{
						?>
						
						<option  value="<?php echo $fila->id_aprendiz ?>"><?php echo $fila->nombre ?></option name="id_aprendiz">
																			
						<?php
						}
						?>
						</select>
					</div>

                    <div class="input-group col-sm-12 col-md-10 col-form-label">
						<div class="input-group-prepend">
							<span class="input-group-text ">
							<i class="icon-home"></i>
							</span>
						</div>
						<?php
						                   
						$resultado=consulta($conn,"SELECT * FROM `ambiente_aprendizaje`");
						?>
						<label for="id_ambiente" class="form-label"></label>
						<select style="" class="form-control" name="id_ambiente" id="id_ambiente">
						<option value="0">Seleccione ambiente de pasantia</option>
						<?php
						while($fila=$resultado->fetch_object())
				
						{
						?>
						
						<option  value="<?php echo $fila->id_ambiente ?>"><?php echo $fila->nombre_ambiente ?></option>
																			
						<?php
						}
						?>
							</select>
					</div>
                  
		
					<div class="input-group col-sm-12 col-md-10 col-form-label">
						<div class="input-group-prepend">
							<span class="input-group-text ">
							<i class="flaticon-profile-1"></i>
							</span>
						</div>
						<label for="estado" class="form-label"></label>
						<select   class="form-control" name="estado" id="estado" required>
							<option value="0">Estado del pasante</option>
							<option value="Activo">Activo</option>
						</select>
					
					</div>
					<div class="form-group">
						<label>Fecha de Registro</label>
					</div>
					<div class="input-group col-sm-12 col-md-10 col-form-label col_last c-azul" required>
						<div class="input-group-prepend">
							<span class="input-group-text ">
							<i class="flaticon-time"></i>
							</span>							
						</div>
						<?php $fcha = date("Y-m-d");?>
						<label for="fecha_registro" class="form-label"></label>
						<input type="date" class="form-control" value="<?php echo $fcha;?>" name="fecha_registro" id="fecha_registro" required  >
					</div>
					<div class="form-group">
						<label>Inicio de Pasantia</label>
					</div>
					<div class="input-group col-sm-12 col-md-10 col-form-label col_last c-azul">
						<div class="input-group-prepend">
							<span class="input-group-text ">
							<i class="flaticon-time"></i>
							</span>							
						</div>
						<label for="fecha_inicio" class="form-label"></label>
						<input type="date" class="form-control" placeholder="Fecha de Inicio de pasantia" name="fecha_inicio"  id="fecha_inicio" required >
					</div>
					<div class="form-group">
						<label>Fin de Pasantia</label>
					</div>
					
					<div class="input-group col-sm-12 col-md-10 col-form-label col_last c-azul">
						<div class="input-group-prepend">
							<span class="input-group-text ">
							<i class="flaticon-time"></i>
							</span>							
						</div>
						<label for="fecha_fin" class="form-label"></label>
						<input type="date" class="form-control" placeholder="Fecha de Inicio de pasantia" name="fecha_fin" id="fecha_fin"required >
					</div>
					
					</div>
					
					<br>
					<div class="modal-footer no-bd">
						<button type="submit" name="registrar" value="agregar"  id="register" class="btn btn-success">Asignar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>