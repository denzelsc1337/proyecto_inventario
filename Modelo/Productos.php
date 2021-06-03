<?php
//include_once('../config/Conexion.php');

$listProducto;

class pProductos
{

	function __construct()
	{
		$this->listProducto = array();
		$this->selectorProd = array();
	}

	public function obtenerProducto()
	{
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = 'SELECT secuence_prod, razon_social,cat.secuence_cat,cat.nom_categoria, marca_nom, nom_producto, cantidades, 
		fecha_entrada
		FROM productos prod
		INNER JOIN categorias cat ON prod.id_categoria = cat.secuence_cat
		INNER JOIN usuario usu ON prod.id_usuario = usu.secuence_usu
		#where cantidades >0
		ORDER BY 1 desc';

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->listProducto[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->listProducto;
	}

	public function selectorProd(){
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();
		$query = 'SELECT cantidades, secuence_prod , concat(nom_producto, " - Marca: " ,marca_nom , " (stock: " ,cantidades , ")") as Producto
		FROM productos';
		$result = mysqli_query($cadena, $query);
		while ($fila = mysqli_fetch_row($result)) {
			$this->selectorProd[]=$fila;
		}
		$cnx->cerrarConexion($cadena);
		return $this->selectorProd;

	}

	function agregarProducto($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		
/* 		$Query = "INSERT INTO `productos` (`secuence_prod`, `id_categoria`, 
		`marca_nom`, `RUC`, `razon_social`, `id_usuario`, `nom_producto`,
		`cantidades`, `fecha_entrada`, `fecha_vencimento`, `descripcion`, 
		`guia_remision`, `num_orden`, `num_pecosa`, `perecible`) 


		VALUES (null,'".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."',
					 '".$data[5]."','".$data[6] ."','".$data[7]."','".$data[8]."',
					 '".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."',
					 '".$data[13]."','".$data[14]."');"; */
		
		$Query = "CALL agregarProducto('".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."',
		'".$data[5]."','".$data[6] ."','".$data[7]."','".$data[8]."',
		'".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."',
		'".$data[13]."','".$data[14]."');";


		echo mysqli_query($cadena, $Query);

		
		$cnx->cerrarConexion($cadena);
		/*$result = mysqli_query($cadena, $Query);
		
		$cnx ->cerrarConexion($cadena);
		return $result;*/
	}
}
