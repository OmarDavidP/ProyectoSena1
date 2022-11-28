<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
                    <div class="modal-content">
                              <div class="modal-header no-bd" style="background: #667db6;  /* fallback for old browsers */
                                        background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
                                        background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                        ">
                                        <h10 class="modal-title" style="color:white;">
                                                  <span class="fw-mediumbold">
                                                  Nuevo Ambiente</span> 
                                        </h10>
                                        
                              </div>
                              <div class="modal-body">
                              <form action="" method="post">
                                        <div class="form-group row">
                                        <label class="col-sm-4 col-md-2 col-form-label">Area de pasantia</label>
                                        <?php
                                        include('../../modelo/funciones.php');                    
                                        $resultado=consulta($conn,"SELECT * FROM `areapasantia`");
                                        ?>
                                        <label for="id_area" class="form-label"></label>
                                        <select style="" class="form-control" name="id_area"  id="id_area">
                                        <option value="0">Seleccione Area</option>
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
                                        <label for="fecha_registro" class="col-sm-10 col-md-2 col-form-label">Fecha de registro</label>                                      
                                        <input class="form-control" placeholder=""  type="date" id="fecha_registro" name="fecha_registro" >                                        
                                        </div>
                                        <div class="form-group row">  
                                        <label for="nombre_ambiente"></label>                                        
                                        <input class="form-control" placeholder="escribe el nombre del ambiente"  type="text" id="nombre_ambiente" name="nombre_ambiente" >                                                 
                                        </div>
                                        <div class="form-group row">   
                                        <label for="capacidad"></label> 
                                        <input class="form-control" placeholder="capacidad del ambiente"  type="number" min="1" max="100"  id="capacidad" name="capacidad" >         
                                        </div>
                                        <div class="form-group row">
                                        <label for="descripcion"></label> 
                                        <textarea id="descripcion" placeholder="Breve descripcion del ambiente" name="descripcion" rows="3" cols="50"></textarea>
                                        </div>
                                        <div class="modal-footer no-bd">
                                          <button type="submit" name="registrar" value="agregar"  id="register" class="btn btn-success">Registrar</button>
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                        </div>
                              </form>    
                              </div>
                              
                    </div>
          </div>
</div>