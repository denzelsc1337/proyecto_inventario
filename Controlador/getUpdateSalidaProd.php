<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "inventario");  

 if(isset($_POST["desp_id"]))  
 {  
      $query = "SELECT secuence_det_des, col.nom_colegio, cat.nom_categoria, prod.nom_producto, 
      cant_prod_des, desp.fecha_des, usu.id_usuario, concat(usu.nom_usuario, ' ' , usu.ape_usuario) as recepcionista, 
      comentario FROM detalle_despacho desp 
      INNER JOIN colegios col ON desp.id_colegio = col.secuence_col 
      INNER JOIN productos prod ON desp.id_producto = prod.secuence_prod 
      INNER JOIN usuario usu ON desp.id_usuario = usu.secuence_usu 
      INNER JOIN categorias cat ON prod.id_categoria = cat.secuence_cat 
      WHERE secuence_det_des = '".$_POST["desp_id"]."' ORDER BY 1 DESC";

      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>