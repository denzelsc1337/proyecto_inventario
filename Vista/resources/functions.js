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


    $('#btnSaveProd').click(function(){

        var _data_prd=$('#frmProd').serialize();
        $.ajax({
            type:"POST",
            url:"../../Controlador/AddProducto.php",
            data: _data_prd,
            success:function(response){
                if (response==true ) {
                    alert("Agregado correctamente");
                    event.returnValue=false;
                    document.getElementById("cod_cate").value = "";
                    document.getElementById("marca_prod").value = "";
                    document.getElementById("ruc_pro").value = "";
                    document.getElementById("razon").value = "";
                    document.getElementById("producto_nombre").value = "";
                    document.getElementById("producto_stock_total").value = "";
                    document.getElementById("date_in").value = "";
                    document.getElementById("date_out").value = "";
                    document.getElementById("desc").value = "";
                    document.getElementById("_gremision").value = "";
                    document.getElementById("_norden").value = "";
                    document.getElementById("npecosa").value = "";
                    document.getElementById("prod_status").value = "";
                }else{
                    alert("Error al registrar, Verifique que los campos esten correctamente completos.");
                }
            }
        });
        return false;
    });


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
                    location.reload();
                    document.getElementById("iduser").value = "";
                    document.getElementById("nomuser").value = "";
                    document.getElementById("usuario_apellido").value = "";
                    document.getElementById("usuario_cargo").value = "";
                    document.getElementById("username").value = "";
                    document.getElementById("pass").value = "";
                    document.getElementById("usuario_email").value = "";
                    document.getElementById("usuario_telefono").value = "";
                    document.getElementById("user_estado").value = "";
                    
                }else{
                    alert("Error en el servidor.");
                }
            }
        });
        return false;
    });
    $('#search').keyup(function() {
        if($('#search').val()) {
          let search = $('#search').val();
          $.ajax({
            url: '../../Controlador/buscarColegio.php',
            data: {search},
            type: 'POST',
            success: function (response) {
              if(!response.error) {
                let tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                  template += `
                  <tr class="text-center">
                  <td>${task.nombre}</td>
                  <td>${task.director}</td>
                  <td>${task.tlf_colegio}</td>
                  <td>${task.mail_colegio}</td>
              </td> 
                  <td>
                      <button type="button" class="btn btn-success editCole" data-toggle="modal" data-target="#exampleModal">
                          Actualizar
                      </button>
                  </td>

              </tr>`
                });
                $('#task-result').show();
                $('#container').html(template);
              }
            }
          })
        }
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
        $("#coment").prop('required');
        $("#firma").prop('required');

        var _data_dspch=$('#frmSalida').serialize();

        $.ajax({
            type:"POST",
            url:"../../Controlador/AddDespacho.php",
            data: _data_dspch,
            success:function(r){
                if (r==1) {
                    alert("Agregado correctamente");
                    event.returnValue=false;
                    window.location.reload();
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
                    document.getElementById("cod_mod").value = "";
                    document.getElementById("cod_ugel").value = "";
                    document.getElementById("nom_cole").value = "";
                    document.getElementById("dir_cole").value = "";
                    document.getElementById("num_cole").value = "";
                    document.getElementById("email_cole").value = "";
                    document.getElementById("dpto_cole").value = "";
                    document.getElementById("prov_cole").value = "";
                    document.getElementById("dsto_cole").value = "";
                    document.getElementById("loc_cole").value = "";
                    document.getElementById("nivel_cole").value = "";
                    
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

