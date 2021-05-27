<?php

$connect = mysqli_connect("localhost", "root", "", "inventario");

$search = $_POST['search'];

if(!empty($search)) {
  $query = "SELECT * FROM colegios  WHERE
   nom_colegio LIKE '%".$search."%'
   or cod_modu_colegio LIKE '%".$search."%'";
  $result = mysqli_query($connect, $query);

  if(!$result) {
    die('Query Error' . mysqli_error($connect));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'id' => $row['secuence_col'],
      'cod' => $row['cod_modu_colegio'],
      'ugel' => $row['ugel_colegio'],
      'nombre' => $row['nom_colegio'],
      'director' => $row['dir_colegio'],
      'tlf_colegio' => $row['tlf_colegio'],
      'mail_colegio' => $row['mail_colegio'],
      'depa_colegio' => $row['depa_colegio'],
      'prov_colegio' => $row['prov_colegio'],
      'dist_colegio' => $row['dist_colegio'],
      'director_colegio' => $row['director_colegio']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
}

?>
