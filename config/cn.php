<?php
/**
 *
 */
class Database
{
	public static function StartUp(){
		$x = new PDO('mysql:host=localhost; dbname=inventario; charset=utf8',"root",'');
		$x->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $x;
	}
}
?>