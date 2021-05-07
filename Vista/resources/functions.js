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
                        alert("something went wrong :c");
                    }
                }
            });
            return false;
        });
    });