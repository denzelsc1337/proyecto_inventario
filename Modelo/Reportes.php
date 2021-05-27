<?php
//require_once('../../config/Conexion.php');

$listRxStock;

class rReporte
{

    function __construct()
    {
        $this->listRxStock = array();
        $this->listRxCategoria = array();
        $this->listRxVencimiento = array();
        $this->listRxEntrada = array();
        $this->listRxDespacho = array();
    }

    public function RxStock()
    {
        include_once('../../config/Conexion.php');
        $cnx = new conexion();
        $cadena = $cnx->abrirConexion();

        // $query = 'SELECT cat.nom_categoria, nom_producto, marca_nom, cantidades
        //             FROM productos prod
        //             INNER JOIN categorias cat ON prod.id_categoria = cat.secuence_cat
        //             ORDER BY cantidades ASC';

        $query = 'SELECT DISTINCT(cat.nom_categoria), prod.nom_producto, prod.marca_nom, sum(prod.cantidades)
                    FROM  productos prod
                    INNER JOIN categorias cat ON prod.id_categoria = cat.secuence_cat
                    INNER JOIN productos_historicos phis ON prod.secuence_prod = phis.secuence_prod
                    WHERE phis.tipo_trans = "INGRESO"
                    group by cat.nom_categoria, prod.nom_producto, prod.marca_nom
                    ORDER BY cantidades ASC';

        $resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->listRxStock[] = $fila;
        }

        $cnx->cerrarConexion($cadena);

        return $this->listRxStock;
    }

    public function RxCategoria()
    {
        include_once('../../config/Conexion.php');
        $cnx = new conexion();
        $cadena = $cnx->abrirConexion();

        $query = 'SELECT nom_categoria , prod.nom_producto, marca_nom, prod.cantidades
                    FROM categorias cat
                    INNER JOIN productos prod ON prod.id_categoria = cat.secuence_cat
                    ORDER BY cat.nom_categoria';

        $resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->listRxCategoria[] = $fila;
        }

        $cnx->cerrarConexion($cadena);

        return $this->listRxCategoria;
    }

    public function RxVencimiento()
    {
        include_once('../../config/Conexion.php');
        $cnx = new conexion();
        $cadena = $cnx->abrirConexion();

        $query = 'SELECT cat.nom_categoria , nom_producto, marca_nom, cantidades, fecha_vencimento
                    FROM productos prod
                    INNER JOIN categorias cat ON prod.id_categoria = cat.secuence_cat
                    WHERE perecible = 1
                    ORDER BY cat.nom_categoria';

        $resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->listRxVencimiento[] = $fila;
        }

        $cnx->cerrarConexion($cadena);

        return $this->listRxVencimiento;
    }

    public function RxEntrada()
    {
        include_once('../../config/Conexion.php');
        $cnx = new conexion();
        $cadena = $cnx->abrirConexion();

        $query = 'SELECT razon_social, guia_remision, num_orden, cat.nom_categoria, nom_producto, marca_nom, phis.unidades, fecha_entrada
                    FROM productos prod
                    INNER JOIN categorias cat ON prod.id_categoria = cat.secuence_cat
                    INNER JOIN usuario usu ON prod.id_usuario = usu.secuence_usu
                    INNER JOIN productos_historicos phis ON prod.secuence_prod = phis.secuence_prod
                    WHERE phis.tipo_trans = "INGRESO"';

        $resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->listRxEntrada[] = $fila;
        }

        $cnx->cerrarConexion($cadena);

        return $this->listRxEntrada;
    }

    public function RxDespacho()
    {
        include_once('../../config/Conexion.php');
        $cnx = new conexion();
        $cadena = $cnx->abrirConexion();

        $query = 'SELECT col.nom_colegio, cat.nom_categoria, prod.nom_producto, dd.cant_prod_des, dd.fecha_des, dd.firma_resp, dd.comentario
                    FROM categorias cat
                    INNER JOIN productos prod ON prod.id_categoria = cat.secuence_cat
                    INNER JOIN detalle_despacho dd ON prod.secuence_prod = dd.id_producto
                    INNER JOIN colegios col ON dd.id_colegio = col.secuence_col';

        $resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->listRxDespacho[] = $fila;
        }

        $cnx->cerrarConexion($cadena);

        return $this->listRxDespacho;
    }
}
