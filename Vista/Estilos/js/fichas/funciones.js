$(function(){
    $('#register').click(function(e){
        var valid = this.form.checkValidity();
        if(valid){        
        var numero_ficha = $('#numero_ficha').val();
        var id_programa = $('#id_programa').val();

            e.preventDefault();	
            $.ajax({
                type: 'POST',
                url: '../../Modelo/Datos_fichas/insert.php',
                data: {numero_ficha:numero_ficha,id_programa:id_programa },
                success: function(data){
                Swal.fire({
                            'title': 'Exito!',
                            'text': data,
                            'icon': 'success',
                            'showConfirmButton': 'false'                        
                            }).then(function() {
            window.location = "listado_fichas.php";
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
          title: 'Estas seguro de eliminar este numero de ficha?',
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
        
           

 
