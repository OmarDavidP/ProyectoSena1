$(function(){
    $('#register').click(function(e){
        var valid = this.form.checkValidity();
        if(valid){        
        var id_senacbc = $('#id_senacbc').val();
        var documento = $('#documento').val();
        var nombre = $('#nombre').val();
        var telefono = $('#telefono').val();
        var correo = $('#correo').val();
        var direccion = $('#direccion').val();

            e.preventDefault();	
            $.ajax({
                type: 'POST',
                url: '../../Modelo/Datos_instructor/insert.php',
                data: {id_senacbc:id_senacbc,documento: documento,nombre: nombre, telefono: telefono, correo:correo,direccion:direccion},
                success: function(data){
                Swal.fire({
                            'title': 'Exito!',
                            'text': data,
                            'icon': 'success',
                            'showConfirmButton': 'false'                        
                            }).then(function() {
            window.location = "listado_instructor.php";
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
                    title: 'eliminado',
                    showConfirmButton: false,
                    timer: 9000
                })
          }
                document.location.href= href;
            }   
        })
        
            })
        
           

 
