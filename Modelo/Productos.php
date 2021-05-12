<?php
//include_once('../config/Conexion.php');

$listProducto;

class pProductos
{

	function __construct()
	{
		$this->listProducto = array();
	}

	public function obtenerProducto()
	{
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'SELECT secuence_prod, /* prov.razon_social ,*/ cat.nom_categoria, mar.nom_marca, nom_producto, cantidades, fecha_entrada, descripcion, num_orden, estado_producto
					FROM productos prod
					/* INNER JOIN proveedor prov ON prod.id_proveedor = prov.id_proveedor */
					INNER JOIN categorias cat ON prod.id_categoria = cat.id_categoria
					INNER JOIN marca mar ON prod.id_marca = mar.id_marca';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->listProducto[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->listProducto;
	}

	function agregarProducto($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$Query = "INSERT INTO `productos`(`secuence_prod`,
										  `id_categoria`,
										  `id_marca`,
										  `nom_producto`,
										  `cantidades`,
										  `fecha_entrada`,
										  `fecha_vencimento`,
										  `descripcion`,
										  `num_orden`,
										  `estado_producto`)
		VALUES (null,'".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."',
					 '".$data[5]."','".$data[6] ."','".$data[7]."','".$data[8]."',
					 '".$data[9]."');";

		echo mysqli_query($cadena, $Query);

		$cnx->cerrarConexion($cadena);
	}
}
