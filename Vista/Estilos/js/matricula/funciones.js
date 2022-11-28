$(function(){
    $('#register').click(function(e){
        var valid = this.form.checkValidity();
        if(valid){        
        var id_aprendiz  = $('#id_aprendiz').val();
        var id_ambiente  = $('#id_ambiente').val();
        var estado  = $('#estado').val();
        var fecha_registro  = $('#fecha_registro').val();
        var fecha_inicio  = $('#fecha_inicio').val();
        var fecha_fin  = $('#fecha_fin').val();

            e.preventDefault();	
            $.ajax({
                type: 'POST',
                url: '../../Modelo/Datos_matricula/insert.php',
                data: {id_aprendiz:id_aprendiz,id_ambiente:id_ambiente,estado:estado,fecha_registro:fecha_registro,fecha_inicio:fecha_inicio,fecha_fin:fecha_fin},
                success: function(data){
                Swal.fire({
                            'title': 'Exito!',
                            'text': data,
                            'icon': 'success',
                            'showConfirmButton': 'false'                        
                            }).then(function() {
            window.location = "listado_asignacion.php";
        });                    
            },        
            error: function(data){
                Swal.fire({
                        'title': 'Error',
                        'text': data,
                        'icon': 'error'
                        })
            }
        }); 
        }else{   
        }
    });
    
    });




    $('.btn-del').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')
        
        Swal.fire({
          title: 'Estas seguro de eliminar este pasante?',
          text: "¡No podrás revertir esto!!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, eliminalo!', 
        }).then((result)=>{
            if(result.value){
                if (result.isConfirmed) {
                    Swal.fire({
                    icon: 'success',
                    title: 'eliminado',
                    showConfirmButton: false,
                    timer: 9000
                })
          }
                document.location.href= href;
            }   
        })
        
            })
        
           

 
