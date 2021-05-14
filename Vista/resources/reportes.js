function generar_reporte_inventario() {
    // Swal.fire({
    //     title: '¿Quieres generar el reporte?',
    //     text: "La generación del reporte PDF puede tardar unos minutos para completarse",
    //     type: 'question',
    //     showCancelButton: true,
    //     confirmButtonColor: '#3085d6',
    //     cancelButtonColor: '#d33',
    //     confirmButtonText: 'Si, generar',
    //     cancelButtonText: 'No, cancelar'
    // }).then((result) => {
    //     if (result.value) {
            let orden = document.querySelector('#orden_reporte_inventario').value;

            orden.trim();

            if (orden != "") {
                url = "../Reporte/" + orden + ".php";
                window.open(url, 'Imprimir reporte de inventario', 'width=825,height=1000,top=0,menubar=NO,toolbar=YES');
            } else {
                Swal.fire({
                    title: 'Ocurrió un error inesperado',
                    text: 'Debe de seleccionar un orden para generar el reporte.',
                    type: 'error',
                    confirmButtonText: 'Aceptar'
                });
            }
        }
    // });
// }
