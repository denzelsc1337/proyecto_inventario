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

        $query = 'SELECT SKU_producto, prov.razon_social, cat.nom_categoria, nom_producto, mar.nom_marca, concat(usu.nom_usuario," ",usu.ape_usuario), cantidades
                    FROM productos prod
                    INNER JOIN proveedor prov ON prod.id_proveedor = prov.id_proveedor
                    INNER JOIN categorias cat ON prod.id_categoria = cat.id_categoria
                    INNER JOIN marca mar ON prod.id_marca = mar.id_marca
                    INNER JOIN usuario usu ON prod.id_usuario = usu.id_usuario
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

        $query = 'SELECT nom_categoria , prod.nom_producto, mar.nom_marca, prod.cantidades
                    FROM categorias cat
                    INNER JOIN productos prod ON prod.id_categoria = cat.id_categoria
                    INNER JOIN marca mar ON prod.id_marca = mar.id_marca
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

        $query = 'SELECT cat.nom_categoria , nom_producto, mar.nom_marca, cantidades, fecha_vencimento
                    FROM productos prod
                    INNER JOIN categorias cat ON prod.id_categoria = cat.id_categoria
                    INNER JOIN marca mar ON prod.id_marca = mar.id_marca
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

        $query = 'SELECT prov.razon_social, guia_remision, num_orden, num_pecosa, CONCAT(usu.nom_usuario," ",usu.ape_usuario), cat.nom_categoria, nom_producto, mar.nom_marca, cantidades, fecha_entrada
                    FROM productos prod
                    INNER JOIN proveedor prov ON prod.id_proveedor = prov.id_proveedor
                    INNER JOIN categorias cat ON prod.id_categoria = cat.id_categoria
                    INNER JOIN marca mar ON prod.id_marca = mar.id_marca
                    INNER JOIN usuario usu ON prod.id_usuario = usu.id_usuario';

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

        $query = 'SELECT col.nom_colegio, col.cod_modu_colegio, col.dir_colegio, col.nom_colegio, cat.nom_categoria, prod.nom_producto, prod.cantidades, dd.fecha_des
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
