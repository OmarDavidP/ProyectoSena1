<!-- Modal detalles aprendiz -->
<div class="modal fade" id="exampleModalCenter<?php echo $lista['id_aprendiz'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #2980B9;  /* fallback for old browsers */
                              background: -webkit-linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9);  /* Chrome 10-25, Safari 5.1-6 */
                              background: linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                              ">
        <h5 class="modal-title" id="exampleModalLongTitle">Detalles del aprendiz</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h2><?php echo $lista['nombre'] ?></h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Ver mas</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal --