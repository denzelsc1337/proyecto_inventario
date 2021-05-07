<?php
/**
 *
 */
class Conexion
{
	public static function conectar(){
		$x = new PDO("mysql: host=localhost; dbname = inventario; charset = utf8","root",3307);
		$x->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $x;
	}
}
?>