$(function(){
    $('#register').click(function(e){
        var valid = this.form.checkValidity();
        if(valid){        
        var id_area  = $('#id_area').val();
        var fecha_registro = $('#fecha_registro').val();
        var nombre_ambiente = $('#nombre_ambiente').val();
        var capacidad = $('#capacidad').val();
        var descripcion = $('#descripcion').val();
       

            e.preventDefault();	
            $.ajax({
                type: 'POST',
                url: '../../Modelo/Datos_ambiente/insert.php',
                data: {id_area:id_area,fecha_registro:fecha_registro,nombre_ambiente:nombre_ambiente,capacidad:capacidad,descripcion:descripcion},
                success: function(data){
                Swal.fire({
                            'title': 'Exito!',
                            'text': data,
                            'icon': 'success',
                            'showConfirmButton': 'false'                        
                            }).then(function() {
            window.location = "listado_ambiente.php";
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
          title: 'Estas seguro de eliminar este Ambiente?',
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
        
           

 
