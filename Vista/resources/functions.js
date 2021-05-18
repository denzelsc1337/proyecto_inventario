 $(document).ready(function(){
    $('#btnSave').click(function(){
        var _data=$('#frmAjax').serialize();
        $.ajax({
            type:"POST",
            url:"../../Controlador/AddCategoria.php",
            data: _data,
            success:function(r){
                if (r==1) {
                    alert("Agregado correctamente");
                    event.returnValue=false;
                    document.getElementById("categoria_nombre").value = "";
                    document.getElementById("cod_cate").value = "";
                }else{
                    alert("Error en el servidor.");
                }
            }
        });
        return false;
    });


 /*  $('#btnSaveProd').click(function(){
        var _data_prd=$('#frmProd').serialize();
         alert(_data_prd);
        return false;  
        $.ajax({
            type:"POST",
            url:"../../Controlador/AddProducto.php",
            data: _data_prd
        }).done(function(response){
            alert("added successfully rctmre");
        }).fail(function(response){
            alert(response);
        });
        return false;
    });*/

/*     $('#btnSaveProd').click(function(){
        var _data_prd=$('#frmProd').serialize();
        $.ajax({
            type:"POST",
            url:"../../Controlador/AddProducto.php",
            data: _data_prd,
            success:function(r){
                if (r==1) {
                    alert("Add successfully");
                    event.returnValue=false; 
                }else{
                    alert("Error en el servidor.");
                }
            }
        });
        return false;
    }); */
    $('#btnSave_usr').click(function(){
        var _data_usr=$('#frmUser').serialize();

        $.ajax({
            type:"POST",
            url:"../../Controlador/AddUser.php",
            data: _data_usr,
            success:function(r){
                if (r==1) {
                    alert("Agregado correctamente");
                    event.returnValue=false;
                    
                }else{
                    alert("Error en el servidor.");
                }
            }
        });
        return false;
    });
    /* $('#dataUpdate').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Botón que activó el modal
        var id = button.data('id') // Extraer la información de atributos de datos
        var cate = button.data('cate') // Extraer la información de atributos de datos
        var estado = button.data('estado') // Extraer la información de atributos de datos
        
        var modal = $(this)
        modal.find('.modal-title').text('Modificar Estado : '+cate)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #cate').val(cate)
        modal.find('.modal-body #estado').val(estado)
        $('.alert').hide();//Oculto alert
      });

      $("#actualizarDatos").submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
*/
    $('#btnSave_despacho').click(function(){
        var _data_dspch=$('#frmSalida').serialize();

        $.ajax({
            type:"POST",
            url:"../../Controlador/AddDespacho.php",
            data: _data_dspch,
            success:function(r){
                if (r==1) {
                    alert("Agregado correctamente");
                    event.returnValue=false;
                    document.getElementById("usuario_cargo").value = "";
                    document.getElementById("colegio_cod").value = "";
                    document.getElementById("prod_cod").value = "";
                    document.getElementById("fecha_in").value = "";
                    document.getElementById("cant_sal").value = "";
                    document.getElementById("coment").value = "";
                    document.getElementById("firma").value = "";
                    
                }else{
                    alert("Error en el servidor.");
                }
            }
        });
        return false;
    }); 

    
    $('#btnAddCole').click(function(){
        var _data_cole=$('#frmCole').serialize();
        $.ajax({
            type:"POST",
            url:"../../Controlador/AddColegio.php",
            data: _data_cole,
            success:function(r){
                if (r==1) {
                    alert("Agregado correctamente");
                    event.returnValue=false;
                    
                }else{
                    alert("Error en el servidor.");
                }
            }
        });
        return false;
    });

    $('#btnActualizarCate').click(function(){
        var _actuCat=$('#frmActuCateg').serialize();
        $.ajax({
            type:"POST",
            url:"../../Controlador/ActualizarCategoria.php",
            data: _actuCat,
            success:function(r){
                if (r==1) {
                    alert("Actualizado correctamente");
                    event.returnValue=false;
                    
                }else{
                    alert("Error en el servidor.");
                }
            }
        });
        return false;
    });

    function handleClick(myRadio) {
        if (myRadio.value == "true") {
            document.getElementById("date_out").disabled = false;
        } else {
            document.getElementById("date_out").disabled = true;
        }
    }
    


});

