 $(document).ready(function(){
    $('#btnSave').click(function(){
        var _data=$('#frmAjax').serialize();
        $.ajax({
            type:"POST",
            url:"../../Controlador/AddCategoria.php",
            data: _data,
            success:function(r){
                if (r==1) {
                    alert("Add successfully");
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
                    alert("Add successfully");
                    event.returnValue=false;
                    
                }else{
                    alert("Error en el servidor.");
                }
            }
        });
        return false;
    });

    $('#btnSave_despacho').click(function(){
        var _data_dspch=$('#frmSalida').serialize();

        $.ajax({
            type:"POST",
            url:"../../Controlador/AddDespacho.php",
            data: _data_dspch,
            success:function(r){
                if (r==1) {
                    alert("Add successfully");
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
                    alert("Add successfully");
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

