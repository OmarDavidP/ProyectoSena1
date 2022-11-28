$(function(){
    $('#register').click(function(e){
        var valid = this.form.checkValidity();
        if(valid){        
        var documento = $('#documento').val();
        var nombre = $('#nombre').val();
        var telefono = $('#telefono').val();
        var correo = $('#correo').val();
        var direccion = $('#direccion').val();
        var jornada = $('#jornada').val();
        var id_ambiente = $('#id_ambiente').val();
        var id_fichas = $('#id_fichas').val();


            e.preventDefault();	
            $.ajax({
                type: 'POST',
                url: '../../Modelo/Datos_pasante/insert.php',
                data: {documento: documento,nombre: nombre, telefono: telefono, correo:correo, direccion:direccion, jornada:jornada, id_ambiente:id_ambiente,id_fichas:id_fichas},
                success: function(data){
                Swal.fire({
                            'title': 'Exito!',
                            'text': data,
                            'icon': 'success',
                            'showConfirmButton': 'false'                        
                            }).then(function() {
            window.location = "listado_pasantes.php";
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
                        icon: "success",
                        text: "Aprendiz eliminado",
                        timer: 7000, // <- Ocultar dentro de 0.7 segundos
                    });
          }
                document.location.href= href;
            }   
        })
        
            })






            
        
           
 
