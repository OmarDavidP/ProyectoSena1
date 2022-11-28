$(function(){
    $('#register').click(function(e){
        var valid = this.form.checkValidity();
        if(valid){        
        var nombre_progra = $('#nombre_progra').val();


            e.preventDefault();	
            $.ajax({
                type: 'POST',
                url: '../../Modelo/Datos_programa/insert.php',
                data: {nombre_progra:nombre_progra},
                success: function(data){
                Swal.fire({
                            'title': 'Exito!',
                            'text': data,
                            'icon': 'success',
                            'showConfirmButton': 'false'                        
                            }).then(function() {
            window.location = "listado_programas.php";
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
          title: 'Estas seguro de eliminar este usuario?',
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
                    title: 'Registro eliminado',
                    showConfirmButton: true,
                    
                })
          }
                document.location.href= href;
            }   
        })
        
            })
        
           
 
