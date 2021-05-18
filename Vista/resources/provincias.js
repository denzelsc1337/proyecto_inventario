/* var $dpto = $('#dpto_cole'); 
$.getJSON('../resources/ubigeo_peru_2016_departamentos.json', function(data){
//console.log(data);
$dpto.html('');
$dpto.append('<option value="">Seleccione un Departamento</option');
for (var i = 0; i < data['departamntos'].length; i++) {
    
    $dpto.append('<option value="'+data['departamntos'][i]['name']+'">' +data['departamntos'][i]['name']+'</option>');  
}

});
var $prov = $('#prov_cole');
$.getJSON('../resources/ubigeo_peru_2016_provincias.json', function(data){
    //console.log(data);
    $prov.html('');
    $prov.append('<option value="">Seleccione una Provincia</option');
    for (var i = 0; i < data['provincias'].length; i++) {
        $prov.append('<option value="'+data['provincias'][i]['name']+'">' +data['provincias'][i]['name']+'</option>');  
    }
});
var $dsto = $('#dsto_cole');
$.getJSON('../resources/ubigeo_peru_2016_distritos.json', function(data){
    //console.log(data);
    $dsto.html('');
    $dsto.append('<option value="">Seleccione un Distrito</option');
    for (var i = 0; i < data['distritos'].length; i++) {
        $dsto.append('<option value="'+data['distritos'][i]['name']+'">' +data['distritos'][i]['name']+'</option>');  
    }

}); */

$(document).ready(function(){
    let $dpto = document.querySelector('#dpto_cole');
    let $prov = document.querySelector('#prov_cole');
    let $dsto = document.querySelector('#dsto_cole');

    function cargarDepart(){
        $.ajax({
            type:"GET",
            url:"../../Controlador/Select.php",
            success:function(response){
                
                const departamentos = JSON.parse(response);
                let template = '<option class="form-control" selected disabled> Selecciona </option>';

                departamentos.forEach(departamento =>{
                    template += `<option class="form-control" value="${departamento.codDepto}">${departamento.nombDepto}</option>`;
                })

                $dpto.innerHTML = template;
                //console.log(response)
            }
        })
    }

    cargarDepart();

    function cargarProvincias(sendDatos){
        $.ajax({
            type:"POST",
            url:"../../Controlador/Select.php",
            data: sendDatos,
            success:function(response){
                const provincias = JSON.parse(response);
                let template = '<option class="form-control" selected disabled> Selecciona </option>';

                provincias.forEach(provincia =>{
                    template += `<option class="form-control" value="${provincia.codProv}">${provincia.nomProv}</option>`;
                })

                $prov.innerHTML = template;
            }
        })
    }

    function cargarDistritos(sendDatos){
        $.ajax({
            type:"POST",
            url:"../../Controlador/Select.php",
            data: sendDatos,
            success:function(response){
                const distritos = JSON.parse(response);
                let template = '<option class="form-control" selected disabled> Selecciona </option>';

                distritos.forEach(distrito =>{
                    template += `<option class="form-control" value="${distrito.codDist}">${distrito.nomDist}</option>`;
                })

                $dsto.innerHTML = template;
            }
        })
    }

    $dpto.addEventListener('change',function () {
        const codigoDepar = $dpto.value
        //console.log(codDepartamento)
        const sendDatos ={
            'codDepar' : codigoDepar
        }

        $dsto.innerHTML = '';
        cargarProvincias(sendDatos)
    })

    $prov.addEventListener('change', function(){
        const codigoProv = $prov.value
        //console.log(codigoProv)

        const sendDatos ={
            'codProv' : codigoProv
        }

        cargarDistritos(sendDatos)
    })
})