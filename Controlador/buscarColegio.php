<?php
include_once('../config/Conexion.php');
$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

$search = $_POST['search'];

if(!empty($search)) {
  $query = "SELECT * FROM colegios WHERE nom_colegio LIKE '$search%'";
  $result = mysqli_query($cadena, $query);
  
  if(!$result) {
    die('Query Error' . mysqli_error($cadena));
  }
  
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'secuence_col' => $row['secuence_col'],
      'cod_modu_colegio' => $row['cod_modu_colegio'],
      'ugel_colegio' => $row['ugel_colegio'],
      'nom_colegio' => $row['nom_colegio'],
      'dir_colegio' => $row['dir_colegio'],
      'tlf_colegio' => $row['tlf_colegio'],
      'mail_colegio' => $row['mail_colegio'],
      'depa_colegio' => $row['depa_colegio'],
      'prov_colegio' => $row['prov_colegio'],
      'dist_colegio' => $row['dist_colegio'],
      'director_colegio' => $row['director_colegio'],
      'nivel_colegio' => $row['dir_colegio']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
}

?>