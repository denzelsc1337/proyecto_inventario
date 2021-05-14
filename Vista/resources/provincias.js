var $dpto = $('#dpto_cole');
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

});